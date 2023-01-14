<?php

namespace Tests\Unit;

use DecimalSDK\Wallet;
use Tests\ClassData;
use Tests\TestCase;

class CoinTest extends TestCase
{

    public function __construct()
    {
        parent::__construct();
        $this->getFaucetCoin();
        $this->createTrx($this->addressSend);
        ClassData::$coinTicker = 'TEST' . rand(100000, 999999);
    }

    public function testCreateNewCoin()
    {
        $payload = [
            'title' => 'Test ' . rand(100000, 999999),
            'ticker' => ClassData::$coinTicker,
            'initSupply' => '500',
            'maxSupply' => '1000',
            'reserve' => '1200',
            'crr' => '45'
        ];

        $result = $this->transaction->createCoin($payload);
        $this->assertEquals(0, $result->tx_response->code);
        sleep(20);
    }

    public function testUpdateCoin()
    {
        $payload = [
            'ticker' => ClassData::$coinTicker,
            'maxSupply' => '1000',
        ];

        $result = $this->transaction->updateCoin($payload);
        $this->assertEquals(0, $result->tx_response->code);
        sleep(20);
    }

    public function testSendCoin()
    {

        $address = new Wallet();

        $payload = [
            'recipient' => $address->getAddress(),
            'denom' => 'del',
            'amount' => 3
        ];

        $result = $this->transaction->sendCoin($payload);
        $this->assertEquals(0, $result->tx_response->code);
        sleep(20);
    }


}
