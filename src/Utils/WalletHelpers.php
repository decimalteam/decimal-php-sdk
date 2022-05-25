<?php


namespace DecimalSDK\Utils;



use DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\Crypto\Encrypt;
use DecimalSDK\Wallet;

class WalletHelpers {

    const DXVALOPER = 'dxvaloper';
    const DX = 'dx';
    const MAX_AUTOMATICALLY_NONCE_VALID_UNTIL = 6000;
	/**
	 * verify address
	 *
	 * @param $string
	 * @param  string  $prefix
	 * @return bool
	 */
	public static function checkAddress($string, $prefix = 'dx')
	{
	    try{
            $decoded = Encrypt::decodeBech32($string);
            if($decoded[0] === $prefix && count($decoded[1])){
                return $string;
            }
        }
        catch (\Exception $e){
            throw new DecimalException("address validation fails for ".$string." ".$e->getMessage());
        }
	}

    /**
     *
     * @param null $hrp
     * @param null $mnemonics
     * @param $path_key
     * @return array
     * @throws \Exception
     */
    public static function generateNewAddress($hrp = null, $mnemonics = null, $path_key)
	{
		if (!$mnemonics) $mnemonics = Encrypt::createMnemonics();

		$hexSeed = Encrypt::generateSeedFromMnemonics($mnemonics);
		$extendedKeys = Encrypt::createExtendedKeysFromSeed($hexSeed, $path_key);
		$derivedKeys = Encrypt::derivedKeysFromExtended($extendedKeys['privateExtended']);
		$bech32Bits = Encrypt::derivedPublicToBech32Bits($derivedKeys['derivedPublicKey']);
		$address = Encrypt::createAddressFromBech32Bits($hrp,$bech32Bits);
        $validatorAddress = Encrypt::createAddressFromBech32Bits($hrp,$bech32Bits);

		return [
			$hexSeed,
			'privateExtendedKey' => $extendedKeys['privateExtended'],
			'publicExtendedKey' => $extendedKeys['publicExtended'],
			'derivedPublicKey' => $derivedKeys['derivedPublicKey'],
			'derivedSecretKey' => $derivedKeys['derivedPrivateKey'],
			'address' => $address,
            'validatorAddress' => $validatorAddress,
		];
	}

	public static function createNewMnemonics($size = 128){
	    return Encrypt::createMnemonics($size);
    }

    public static function updateNonce(Wallet $wallet, $nonce)
    {
        $wallet->updateNonce((int)$nonce);
    }

    public static function isNonceSetAutomatically(Wallet $wallet, $options)
    {
        $setNonceAutomatically = isset($options['setNonceAutomatically']) && $options['setNonceAutomatically'] == true;
        return $setNonceAutomatically && $wallet->currentNonce != null && ((time() - $wallet->currentNonceValidUntil) < self::MAX_AUTOMATICALLY_NONCE_VALID_UNTIL);
    }
}
