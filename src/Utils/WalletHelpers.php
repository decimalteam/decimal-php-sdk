<?php


namespace DecimalSDK\Utils;



use DecimalSDK\Utils\Crypto\Encrypt;

class WalletHelpers {

	public static function generateNewAddress($hrp = null,$mnemonics = null)
	{
		if (!$mnemonics) $mnemonics = Encrypt::createMnemonics();

		$hexSeed = Encrypt::generateSeedFromMnemonics($mnemonics);
		$extendedKeys = Encrypt::createExtendedKeysFromSeed($hexSeed);
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
}
