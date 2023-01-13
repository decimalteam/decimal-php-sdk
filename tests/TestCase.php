<?php

namespace Tests;

use DecimalSDK\TransactionDecimal;
use DecimalSDK\Utils\ApiRequester;
use DecimalSDK\Utils\Networks;
use DecimalSDK\Wallet;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{

    protected $addressSend = null;
    protected $secondAddressMultiSend = null;
    /**
     * @var TransactionDecimal
     */
    protected $transaction = null;
    /**
     * @var ApiRequester
     */
    private $requester;

    protected function getFaucetCoin(){
        $this->requester = new ApiRequester($this->addressSend, Networks::DEVNET, false, []);
        $data = $this->requester->post('/api/faucet', ['address' => $this->addressSend->getAddress()]);
        var_dump($data);
        if(!$data->ok){
            throw new \Exception('faucet error');
        }

        sleep(20);
    }

    protected function createTrx(Wallet $wallet){
        $this->transaction = new TransactionDecimal($wallet, Networks::TESTNET);
    }
}
