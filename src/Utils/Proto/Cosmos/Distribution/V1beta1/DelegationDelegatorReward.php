<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/distribution/v1beta1/distribution.proto

namespace Cosmos\Distribution\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DelegationDelegatorReward represents the properties
 * of a delegator's delegation reward.
 *
 * Generated from protobuf message <code>cosmos.distribution.v1beta1.DelegationDelegatorReward</code>
 */
class DelegationDelegatorReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string validator_address = 1 [json_name = "validatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $validator_address = '';
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin reward = 2 [json_name = "reward", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     */
    private $reward;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $validator_address
     *     @type \Cosmos\Base\V1beta1\DecCoin[]|\Google\Protobuf\Internal\RepeatedField $reward
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Distribution\V1Beta1\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string validator_address = 1 [json_name = "validatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getValidatorAddress()
    {
        return $this->validator_address;
    }

    /**
     * Generated from protobuf field <code>string validator_address = 1 [json_name = "validatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setValidatorAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->validator_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin reward = 2 [json_name = "reward", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReward()
    {
        return $this->reward;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin reward = 2 [json_name = "reward", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     * @param \Cosmos\Base\V1beta1\DecCoin[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReward($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\DecCoin::class);
        $this->reward = $arr;

        return $this;
    }

}

