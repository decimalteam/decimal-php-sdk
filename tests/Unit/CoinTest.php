<?php

namespace Tests\Unit;

use App\Models\UserMobile;
use App\Models\UserTelegram;
use App\Porto\Task\User\GetCodeConfirmEmailTask;
use DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\WalletHelpers;
use DecimalSDK\Wallet;
use Tests\TestCase;

class CoinTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->getFaucetCoin();
        $this->createTrx($this->addressSend);
    }

    public function testCreateNewCoin()
    {
        $payload = [
            'title' => 'Test ' . rand(100000, 999999),
            'ticker' => 'TEST' . rand(100000, 999999),
            'initSupply' => '50000',
            'maxSupply' => '100000',
            'reserve' => '12000',
            'crr' => '45'
        ];

        $result = $this->transaction->createCoin($payload);

        $this->assertTrue(true);
    }


}
