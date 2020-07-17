<?php


namespace DecimalSDK\Utils\Crypto\Bip44;

use Elliptic\EC;
use DecimalSDK\Utils\Crypto\Encrypt;

class KeyPairs
{
    /**
     * Data of key
     *
     * @var array
     */
    protected $data = [
        'version' => null,
        'depth' => 0,
        'index' => '00000000',
        'privateKey' => null,
        'publicKey' => null,
        'chainCode' => null,
        'fingerprint' => '00000000',
        'parentFingerprint' => '00000000'
    ];

    /**
     * Versions
     */
    const BITCOIN_VERSIONS = [
        'private' => 0x0488ADE4,
        'public' => 0x0488B21E
    ];

    /**
     * Offset
     */
    const HARDENED_OFFSET = 0x80000000;

    /**
     * Elliptic curve
     *
     * @EC
     */
    protected $ellipticCurve;

    /**
     * HDKey constructor.
     *
     * @param array $options
     * @throws \Exception
     */
    public function __construct($options = [])
    {
        if(!$this->validateOptions($options)) {
            throw new \Exception('Invalid options');
        }

        $this->data = array_merge($this->data, $options);

        if(isset($options['privateKey'])) {
            $this->generateKeysFromPrivate($options['privateKey']);
        }

        $this->ellipticCurve = new EC('secp256k1');
    }

    /**
     * Getter
     *
     * @param string $name
     * @return mixed
     */
    public function __get(string $name)
    {
        return $this->data[$name];
    }

    /**
     * Get current private extended key
     *
     * @return string
     */
    public function getPrivateExtendedKey(): string
    {
        return $this->encode(self::BITCOIN_VERSIONS['private']);
    }

    /**
     * Get current public extended key
     *
     * @return string
     */
    public function getPublicExtendedKey(): string
    {
        return $this->encode(self::BITCOIN_VERSIONS['public']);
    }

    /**
     * @param string $path
     * @return $this|KeyPairs
     * @throws \Exception
     */
    public function deriveKey(string $path)
    {
        if (in_array($path, ["m", "M", "m'", "M'"])) {
            return $this;
        }

        $entries = explode('/', $path);

        $Keys = $this;
        foreach ($entries as $key => $entry) {
            if ($key === 0) {
                if($entry !== 'm') {
                    throw new \Exception('Invalid path');
                }
                continue;
            }

            $childIndex = intval($entry);
            if($childIndex > self::HARDENED_OFFSET) {
                throw new \Exception('Invalid index');
            }

            $hardened = (strlen($entry) > 1) && ($entry[strlen($entry) - 1] === "'");
            if ($hardened) {
                $childIndex += self::HARDENED_OFFSET;
            }

            $Keys = $Keys->deriveChild($childIndex);
        }

        return $Keys;
    }

    /**
     * @param int $index
     * @return KeyPairs
     * @throws \Exception
     */

    public function deriveChild(int $index)
    {
        $isHardened = $index >= self::HARDENED_OFFSET;
        $indexHex = $this->convertIndexToHex($index);

        $data = $this->prepareDataString($isHardened, $indexHex);
        list($IL, $IR) = $this->hmac($data, $this->chainCode);

        $keyPair = new EcExt($this->ellipticCurve, []);
        try {
            $privateKey = $keyPair->privateKeyTweakAdd($this->data['privateKey'], $IL, 'hex')->toString('hex');
        } catch (\Exception $e) {
            return $this->deriveKey($index + 1);
        }

        $Keys = new self([
            'depth' => $this->data['depth'] + 1,
            'index' => $index,
            'chainCode' => $IR,
            'parentFingerprint' => $this->data['fingerprint']
        ]);

        $Keys->generateKeysFromPrivate($privateKey);

        return $Keys;
    }

    /**
     * @param string $privateKey
     * @throws \Exception
     */

    public function generateKeysFromPrivate(string $privateKey)
    {
        if(empty($privateKey)) {
            throw new \Exception('Invalid private key');
        }

        $this->data['privateKey'] = str_repeat('0', 64 - strlen($privateKey)) . $privateKey;
        $this->data['publicKey'] = $this->getPublicKeyFromPrivate($privateKey);
        $this->data['fingerprint'] = $this->computeFingerprint($this->data['publicKey']);
    }

    /**
     * Compute public key from private using elliptic curve
     *
     * @param string $privateKey
     * @return string
     */
    protected function getPublicKeyFromPrivate(string $privateKey): string
    {
        $this->ellipticCurve = new EC('secp256k1');
        $keys = new EcExt($this->ellipticCurve, [
            'priv' => $privateKey,
            'privEnc' => 'hex'
        ]);

        return $keys->getPublic(true, 'hex');
    }

    /**
     * Prepare data string for HMAC hashing
     *
     * @param bool $isHardened
     * @param string $index
     * @return string
     */
    protected function prepareDataString(bool $isHardened, string $index): string
    {
        if($isHardened) {
            assert(!empty($this->data['privateKey']), 'Could not derive hardened child key');

            return $this->privateKeyWithNulls($this->data['privateKey']) . $index;
        }

        return $this->data['publicKey'] . $index;
    }

    /**
     * Encode data to base58 by the version
     *
     * @param $version
     * @return string
     */
    protected function encode($version)
    {
        $data = [
            dechex($version),
            Encrypt::toHexEncode($this->data['depth']),
            Encrypt::toHexEncode(intval($this->data['fingerprint']) !== 0 ? $this->data['parentFingerprint'] : $this->data['fingerprint']),
            $this->convertIndexToHex($this->data['index']),
            $this->data['chainCode'],
            ($version === self::BITCOIN_VERSIONS['private'] ? $this->privateKeyWithNulls($this->data['privateKey']) : $this->data['publicKey'])
        ];

        $string = implode('', $data);
        if (strlen($string) % 2 !== 0) $string = '0' . $string;

        $bs = @pack("H*", $string);
        $checksum = hash("sha256", hash("sha256", $bs, true));
        $checksum = substr($checksum, 0, 8);

        return Encrypt::fromHexToBase58($string . $checksum);
    }

    /**
     * And nulls for private key
     *
     * @param string $privateKey
     * @return string
     */
    protected function privateKeyWithNulls(string $privateKey): string
    {
        return '00' . $privateKey;
    }

    /**
     * Create HMAC hash and return key/chaincode (IL, IR)
     *
     * @param $data
     * @param $password
     * @return array
     */
    protected function hmac($data, $password): array
    {
        $I = hash_hmac('sha512', pack('H*', $data), pack('H*', $password));

        return [
            substr($I, 0, 64),
            substr($I, 64, 64)
        ];
    }

    /**
     * Compute fingerprint by public key
     *
     * @param string $publicKey
     * @return string
     */
    protected function computeFingerprint(string $publicKey)
    {
        $identifier = Encrypt::hexToRipmed160($publicKey);

        return Encrypt::decodeHex(substr($identifier, 0, 8));
    }

    /**
     * Validate constructor options
     *
     * @param array $options
     * @return bool
     */
    protected function validateOptions(array $options): bool
    {
        foreach($options as $field => $value) {
            if(!array_key_exists($field, $this->data)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Prepare index to hex
     *
     * @param int $index
     * @return string
     */
    protected function convertIndexToHex(int $index): string
    {
        $indexHex = dechex($index);
        return str_repeat('0', 8 - strlen($indexHex)) . $indexHex;
    }
}
