<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/staking.proto

namespace Cosmos\Staking\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Commission defines commission parameters for a given validator.
 *
 * Generated from protobuf message <code>cosmos.staking.v1beta1.Commission</code>
 */
class Commission extends \Google\Protobuf\Internal\Message
{
    /**
     * commission_rates defines the initial commission rates to be used for creating a validator.
     *
     * Generated from protobuf field <code>.cosmos.staking.v1beta1.CommissionRates commission_rates = 1 [json_name = "commissionRates", (.gogoproto.nullable) = false, (.gogoproto.embed) = true];</code>
     */
    protected $commission_rates = null;
    /**
     * update_time is the last time the commission rate was changed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2 [json_name = "updateTime", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"update_time\"", (.gogoproto.stdtime) = true];</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Staking\V1beta1\CommissionRates $commission_rates
     *           commission_rates defines the initial commission rates to be used for creating a validator.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           update_time is the last time the commission rate was changed.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Staking\V1beta1\GPBMetadata\Staking::initOnce();
        parent::__construct($data);
    }

    /**
     * commission_rates defines the initial commission rates to be used for creating a validator.
     *
     * Generated from protobuf field <code>.cosmos.staking.v1beta1.CommissionRates commission_rates = 1 [json_name = "commissionRates", (.gogoproto.nullable) = false, (.gogoproto.embed) = true];</code>
     * @return \Cosmos\Staking\V1beta1\CommissionRates|null
     */
    public function getCommissionRates()
    {
        return $this->commission_rates;
    }

    public function hasCommissionRates()
    {
        return isset($this->commission_rates);
    }

    public function clearCommissionRates()
    {
        unset($this->commission_rates);
    }

    /**
     * commission_rates defines the initial commission rates to be used for creating a validator.
     *
     * Generated from protobuf field <code>.cosmos.staking.v1beta1.CommissionRates commission_rates = 1 [json_name = "commissionRates", (.gogoproto.nullable) = false, (.gogoproto.embed) = true];</code>
     * @param \Cosmos\Staking\V1beta1\CommissionRates $var
     * @return $this
     */
    public function setCommissionRates($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Staking\V1beta1\CommissionRates::class);
        $this->commission_rates = $var;

        return $this;
    }

    /**
     * update_time is the last time the commission rate was changed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2 [json_name = "updateTime", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"update_time\"", (.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * update_time is the last time the commission rate was changed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2 [json_name = "updateTime", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"update_time\"", (.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

