<?php


namespace DecimalSDK;

use Src\ApiRequester;
use Src\Crypto\Encrypt;

class AccountState
{

    public $address;
    public $accountInfo;
    public $nodeInfo;
    public $privateKey;

    public function __construct($address,$privateKey = null,$accountInfo = null,$nodeInfo = null)
    {
        $this->address = $address;
        $this->accountInfo = $accountInfo;
        $this->nodeInfo = $nodeInfo;
        $this->privateKey = $privateKey;
    }

    /**
     * @param null $mnemonics
     * @param bool $asState
     * @return AccountState|null
     * @throws \BitWasp\Bech32\Exception\Bech32Exception
     * @throws \BitWasp\Bitcoin\Exceptions\Base58ChecksumFailure
     * @throws \BitWasp\Bitcoin\Exceptions\InvalidDerivationException
     * @throws \BitWasp\Bitcoin\Exceptions\RandomBytesFailure
     * @throws \BitWasp\Buffertools\Exceptions\ParserOutOfRange
     */

    public static function createAccount($mnemonics = null, $asState = true)
    {

    }

    /**
     * @return $this|null
     */

    public function getState()
    {
        if(!$this->address) return null;

//        $this->accountInfo = (new ApiRequester())->getAccountInfo($this->address);
//        $this->nodeInfo = (new ApiRequester())->getNodeInfo();

        return $this;

    }

}
