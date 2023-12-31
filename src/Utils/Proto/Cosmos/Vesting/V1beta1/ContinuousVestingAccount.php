<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/vesting/v1beta1/vesting.proto

namespace Cosmos\Vesting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ContinuousVestingAccount implements the VestingAccount interface. It
 * continuously vests by unlocking coins linearly with respect to time.
 *
 * Generated from protobuf message <code>cosmos.vesting.v1beta1.ContinuousVestingAccount</code>
 */
class ContinuousVestingAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cosmos.vesting.v1beta1.BaseVestingAccount base_vesting_account = 1 [json_name = "baseVestingAccount", (.gogoproto.embed) = true];</code>
     */
    protected $base_vesting_account = null;
    /**
     * Generated from protobuf field <code>int64 start_time = 2 [json_name = "startTime", (.gogoproto.moretags) = "yaml:\"start_time\""];</code>
     */
    protected $start_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Vesting\V1beta1\BaseVestingAccount $base_vesting_account
     *     @type int|string $start_time
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Vesting\V1beta1\GPBMetadata\Vesting::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cosmos.vesting.v1beta1.BaseVestingAccount base_vesting_account = 1 [json_name = "baseVestingAccount", (.gogoproto.embed) = true];</code>
     * @return \Cosmos\Vesting\V1beta1\BaseVestingAccount|null
     */
    public function getBaseVestingAccount()
    {
        return $this->base_vesting_account;
    }

    public function hasBaseVestingAccount()
    {
        return isset($this->base_vesting_account);
    }

    public function clearBaseVestingAccount()
    {
        unset($this->base_vesting_account);
    }

    /**
     * Generated from protobuf field <code>.cosmos.vesting.v1beta1.BaseVestingAccount base_vesting_account = 1 [json_name = "baseVestingAccount", (.gogoproto.embed) = true];</code>
     * @param \Cosmos\Vesting\V1beta1\BaseVestingAccount $var
     * @return $this
     */
    public function setBaseVestingAccount($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Vesting\V1beta1\BaseVestingAccount::class);
        $this->base_vesting_account = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 start_time = 2 [json_name = "startTime", (.gogoproto.moretags) = "yaml:\"start_time\""];</code>
     * @return int|string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Generated from protobuf field <code>int64 start_time = 2 [json_name = "startTime", (.gogoproto.moretags) = "yaml:\"start_time\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->start_time = $var;

        return $this;
    }

}

