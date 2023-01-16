<?php

namespace Tests\Unit;

use DecimalSDK\NetworkOldInfo;
use Tests\ClassData;
use Tests\TestCase;

class OldInfoTest extends TestCase
{

    private $networkInfo;

    public function __construct()
    {
        parent::__construct();
        $this->networkInfo = new NetworkOldInfo();
    }

    public function testGetInfoAddress()
    {
        $infoAddress = $this->networkInfo->getAddress(ClassData::$oldAddress);
        $this->assertEquals(ClassData::$oldAddress, $infoAddress->result->address);
    }

    public function testGetRewardsAddress()
    {
        $infoAddress = $this->networkInfo->getAddressRewards(ClassData::$oldAddress);

        $this->assertEquals(49611, $infoAddress->result->count);
    }


}
