<?php

namespace Tests\Unit;

use App\Models\UserMobile;
use App\Models\UserTelegram;
use App\Porto\Task\User\GetCodeConfirmEmailTask;
use DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\WalletHelpers;
use DecimalSDK\Wallet;
use Tests\TestCase;

class WalletTest extends TestCase
{

    public function testCreateAddressGenerate()
    {
        $wallet = new Wallet();
        $wallet->getAddress();

        $this->assertTrue(isBech32(($wallet->getAddress())));
    }

    public function testCreateAddressFromMnemonic()
    {
        $wallet = new Wallet('affair stereo math fetch liar thank risk pen will equip question couple pet resource brand sunset guide fun load differ differ artefact ghost caution');
        $wallet->getAddress();

        $this->assertTrue(isBech32(($wallet->getAddress())));
        $this->assertEquals('d01m8mxph3rhjuct77tqz28m0p75jn24ps5k4k8ec', $wallet->getAddress());

    }


}
