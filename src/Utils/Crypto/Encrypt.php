<?php


namespace DecimalSDK\Utils\Crypto;

use BitcoinPHP\BitcoinECDSA\BitcoinECDSA;
use BitWasp\Bitcoin\Key\Factory\HierarchicalKeyFactory;
use BitWasp\Bitcoin\Mnemonic\Bip39\Bip39SeedGenerator;
use BitWasp\Bitcoin\Mnemonic\MnemonicFactory;
use DecimalSDK\Utils\Crypto\Bip44\BIP44;
use function BitWasp\Bech32\convertBits;
use function BitWasp\Bech32\encode;
use function BitWasp\Bech32\decode;
use kornrunner\Keccak;
use kornrunner\Secp256k1;
use kornrunner\Serializer\HexSignatureSerializer;

class Encrypt
{
    /**
     * init
     * @param int $size
     * @return string
     * @throws \BitWasp\Bitcoin\Exceptions\RandomBytesFailure
     */
    public static function createMnemonics($size = 128)
    {
        return MnemonicFactory::bip39()->create($size);
    }

    /**
     * @param $mnemonics
     * @param string $passphrase
     * @return string
     * @throws \Exception
     */

    public static function generateSeedFromMnemonics($mnemonics, $passphrase = '')
    {
        (MnemonicFactory::bip39())->mnemonicToEntropy($mnemonics);
        return (new Bip39SeedGenerator())->getSeed($mnemonics, $passphrase)->getHex();
    }

    /**
     * @param $seed
     * @param string $path
     * @return array
     * @throws \Exception
     */

    public static function createExtendedKeysFromSeed($seed, $path = "m/44'/60'/0'/0/0")
    {
        $keys = BIP44::fromMasterSeed($seed)->deriveKey($path);

        return [
            'privateExtended' => $keys->getPrivateExtendedKey(),
            'publicExtended' => $keys->getPublicExtendedKey()
        ];
    }

    /**
     * @param $key
     * @param int $child
     * @return array
     * @throws \BitWasp\Bitcoin\Exceptions\Base58ChecksumFailure
     * @throws \BitWasp\Bitcoin\Exceptions\InvalidDerivationException
     * @throws \BitWasp\Buffertools\Exceptions\ParserOutOfRange
     *
     */

    public static function derivedKeysFromExtended($key, $child = 0)
    {
        $bip32 = (new HierarchicalKeyFactory())->fromExtended($key);
        $keyPair = $bip32->deriveChild($child);
        $bitcoinECDSA = new BitcoinECDSA();
        $bitcoinECDSA->setPrivateKey($keyPair->getPrivateKey()->getHex());
        return [
            'derivedPrivateKey' => $keyPair->getPrivateKey()->getHex(),
            'derivedPublicKey' => $bitcoinECDSA->getUncompressedPubKey(),
            'derivedPublicCompressedKey' => $bitcoinECDSA->getPubKey(),
        ];
    }

    /**
     * @param $key
     * @return int[]
     * @throws \BitWasp\Bech32\Exception\Bech32Exception
     */

    public static function derivedPublicToBech32Bits($key)
    {
        $hash = Keccak::hash(hex2bin(substr($key, 2)), 256);
        $uint = self::hexToUint8Array(substr($hash, 24));
        return convertBits($uint, count($uint), 8, 5);
    }

    public static function hexToRipmed160(string $str)
    {
        return Keccak::hash(hex2bin($str), 256);
    }

    public static function createAddressFromBech32Bits($hrp, $bitsArray)
    {
        return encode($hrp, $bitsArray);
    }
    
    public static function decodedBech32($bech32) {
        return decode($bech32); 
    }
    
    public static function signTransaction($txPayload, $privateKey = null)
    {
        $tx = json_encode(sortPayload($txPayload));
        $tx = stripcslashes($tx);

        self::sepc256k1Sign($tx, $privateKey);
    }

    public static function hexToUint8Array($hex)
    {
        preg_match_all('/.{1,2}/', $hex, $hexPairs);

        return array_map(function (&$itm) {
            return hexdec($itm);
        }, $hexPairs[0]);
    }

    public static function sepc256k1Sign($tx, $key)
    {
        $msg322 = Keccak::hash($tx->serializeToString(), 256);

        $secp256k1 = new Secp256k1();
        $signature = $secp256k1->sign($msg322, $key);

        $serializer = new HexSignatureSerializer();
        $signatureString = $serializer->serialize($signature);

        return hex2bin($signatureString);
    }

    public static function decodeHex(string $hex)
    {
        return gmp_strval(gmp_init($hex, 16), 10);
    }

    public static function toHexEncode($number): string
    {
        $hex = gmp_strval(gmp_init($number, 10), 16);

        return (strlen($hex) % 2 != 0) ? '0' . $hex : $hex;
    }

    public static function fromHexToBase58(string $hex): string
    {
        if (strlen($hex) == 0) {
            return '';
        }

        $num = gmp_strval(gmp_init($hex, 16), 58);

        if ($num != '0') {
            $num = strtr(
                $num,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuv',
                '123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz'
            );
        } else {
            $num = '';
        }
        $pad = '';
        $n = 0;
        while (substr($hex, $n, 2) == '00') {
            $pad .= '1';
            $n += 2;
        }

        return $pad . $num;
    }

	/**
	 * @param $sBech
	 * @return mixed
	 */
	public static function decodeBech32($sBech)
	{
		return decode($sBech);
	}
}
