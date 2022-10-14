<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/staking.proto

namespace Cosmos\Staking\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CommissionRates defines the initial commission rates to be used for creating
 * a validator.
 *
 * Generated from protobuf message <code>cosmos.staking.v1beta1.CommissionRates</code>
 */
class CommissionRates extends \Google\Protobuf\Internal\Message
{
    /**
     * rate is the commission rate charged to delegators, as a fraction.
     *
     * Generated from protobuf field <code>string rate = 1 [json_name = "rate", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec"];</code>
     */
    protected $rate = '';
    /**
     * max_rate defines the maximum commission rate which validator can ever charge, as a fraction.
     *
     * Generated from protobuf field <code>string max_rate = 2 [json_name = "maxRate", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"max_rate\""];</code>
     */
    protected $max_rate = '';
    /**
     * max_change_rate defines the maximum daily increase of the validator commission, as a fraction.
     *
     * Generated from protobuf field <code>string max_change_rate = 3 [json_name = "maxChangeRate", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"max_change_rate\""];</code>
     */
    protected $max_change_rate = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $rate
     *           rate is the commission rate charged to delegators, as a fraction.
     *     @type string $max_rate
     *           max_rate defines the maximum commission rate which validator can ever charge, as a fraction.
     *     @type string $max_change_rate
     *           max_change_rate defines the maximum daily increase of the validator commission, as a fraction.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Staking\V1beta1\GPBMetadata\Staking::initOnce();
        parent::__construct($data);
    }

    /**
     * rate is the commission rate charged to delegators, as a fraction.
     *
     * Generated from protobuf field <code>string rate = 1 [json_name = "rate", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec"];</code>
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * rate is the commission rate charged to delegators, as a fraction.
     *
     * Generated from protobuf field <code>string rate = 1 [json_name = "rate", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec"];</code>
     * @param string $var
     * @return $this
     */
    public function setRate($var)
    {
        GPBUtil::checkString($var, True);
        $this->rate = $var;

        return $this;
    }

    /**
     * max_rate defines the maximum commission rate which validator can ever charge, as a fraction.
     *
     * Generated from protobuf field <code>string max_rate = 2 [json_name = "maxRate", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"max_rate\""];</code>
     * @return string
     */
    public function getMaxRate()
    {
        return $this->max_rate;
    }

    /**
     * max_rate defines the maximum commission rate which validator can ever charge, as a fraction.
     *
     * Generated from protobuf field <code>string max_rate = 2 [json_name = "maxRate", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"max_rate\""];</code>
     * @param string $var
     * @return $this
     */
    public function setMaxRate($var)
    {
        GPBUtil::checkString($var, True);
        $this->max_rate = $var;

        return $this;
    }

    /**
     * max_change_rate defines the maximum daily increase of the validator commission, as a fraction.
     *
     * Generated from protobuf field <code>string max_change_rate = 3 [json_name = "maxChangeRate", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"max_change_rate\""];</code>
     * @return string
     */
    public function getMaxChangeRate()
    {
        return $this->max_change_rate;
    }

    /**
     * max_change_rate defines the maximum daily increase of the validator commission, as a fraction.
     *
     * Generated from protobuf field <code>string max_change_rate = 3 [json_name = "maxChangeRate", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"max_change_rate\""];</code>
     * @param string $var
     * @return $this
     */
    public function setMaxChangeRate($var)
    {
        GPBUtil::checkString($var, True);
        $this->max_change_rate = $var;

        return $this;
    }

}

