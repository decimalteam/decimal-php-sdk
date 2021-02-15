<?php

namespace DecimalSDK;

use DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\WalletHelpers;

class Wallet
{
    private $arguments;
    private $validatorAddress;
    private $mnemonics;

    /**
     * Wallet constructor.
     * @param null $mnemonics
     * @param string $path_key
     * @throws \Exception
     */
    //"m/44'/60'/0'/0/0"
    //how it was "m/44'/60'/0'/0"
    public function __construct($mnemonics = null, $path_key = "m/44'/60'/0'/0")
    {
        if(!$mnemonics) $mnemonics = WalletHelpers::createNewMnemonics();
        $this->mnemonics = $mnemonics;
	    $this->arguments = WalletHelpers::generateNewAddress('dx',$mnemonics, $path_key);
	    $this->validatorAddress = WalletHelpers::generateNewAddress('dxvaloper', $mnemonics, $path_key);
    }

    public function getAddress()
    {
        if(!$this->arguments['address']) throw new DecimalException('Address wasn`t created' );

    	return $this->arguments['address'];
    }

    public function getValidatorAddress()
    {
        if(!$this->validatorAddress['validatorAddress']) throw new DecimalException('Validator address wasn`t created' );

        return $this->validatorAddress['validatorAddress'];
    }

    public function getPrivateKey()
    {
        if(!$this->arguments['derivedSecretKey']) throw new DecimalException('Private key wasn`t created' );

    	return $this->arguments['derivedSecretKey'];
    }

    public function getPublicKey()
    {
        if(!$this->arguments['derivedPublicKey']) throw new DecimalException('Public key wasn`t created' );

    	return $this->arguments['derivedPublicKey'];
    }

    public function getArguments()
    {
    	return $this->arguments;
    }

    public function getMnemonics()
    {
    	return $this->mnemonics;
    }
}
