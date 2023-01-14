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

    public function __construct()
    {
        parent::__construct();
    }

    protected function getFaucetCoin(){
        $this->addressSend = new Wallet('device chronic spirit state swarm enough key mention spin foster receive project');
//        $this->requester = new ApiRequester($this->addressSend, Networks::DEVNET, false, []);
//        $data = $this->requester->post('/api/faucet', ['address' => $this->addressSend->getAddress()]);
//        if(!$data->ok){
//            throw new \Exception('faucet error');
//        }
//
//        var_dump($this->addressSend->getMnemonics());
//
//        sleep(50);
    }

    protected function createTrx(Wallet $wallet){
        $this->transaction = new TransactionDecimal($wallet, Networks::DEVNET);
    }
}
