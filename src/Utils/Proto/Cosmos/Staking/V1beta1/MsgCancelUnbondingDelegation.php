<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/tx.proto

namespace Cosmos\Staking\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgCancelUnbondingDelegation defines the SDK message for performing a cancel unbonding delegation for delegator
 * Since: cosmos-sdk 0.46
 *
 * Generated from protobuf message <code>cosmos.staking.v1beta1.MsgCancelUnbondingDelegation</code>
 */
class MsgCancelUnbondingDelegation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string delegator_address = 1 [json_name = "delegatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $delegator_address = '';
    /**
     * Generated from protobuf field <code>string validator_address = 2 [json_name = "validatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $validator_address = '';
    /**
     * amount is always less than or equal to unbonding delegation entry balance 
     *
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin amount = 3 [json_name = "amount", (.gogoproto.nullable) = false];</code>
     */
    protected $amount = null;
    /**
     * creation_height is the height which the unbonding took place.
     *
     * Generated from protobuf field <code>int64 creation_height = 4 [json_name = "creationHeight"];</code>
     */
    protected $creation_height = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $delegator_address
     *     @type string $validator_address
     *     @type \Cosmos\Base\V1beta1\Coin $amount
     *           amount is always less than or equal to unbonding delegation entry balance 
     *     @type int|string $creation_height
     *           creation_height is the height which the unbonding took place.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Staking\V1Beta1\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string delegator_address = 1 [json_name = "delegatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getDelegatorAddress()
    {
        return $this->delegator_address;
    }

    /**
     * Generated from protobuf field <code>string delegator_address = 1 [json_name = "delegatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setDelegatorAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->delegator_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string validator_address = 2 [json_name = "validatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getValidatorAddress()
    {
        return $this->validator_address;
    }

    /**
     * Generated from protobuf field <code>string validator_address = 2 [json_name = "validatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
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
     * amount is always less than or equal to unbonding delegation entry balance 
     *
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin amount = 3 [json_name = "amount", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Base\V1beta1\Coin|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    public function hasAmount()
    {
        return isset($this->amount);
    }

    public function clearAmount()
    {
        unset($this->amount);
    }

    /**
     * amount is always less than or equal to unbonding delegation entry balance 
     *
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin amount = 3 [json_name = "amount", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Base\V1beta1\Coin $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\V1beta1\Coin::class);
        $this->amount = $var;

        return $this;
    }

    /**
     * creation_height is the height which the unbonding took place.
     *
     * Generated from protobuf field <code>int64 creation_height = 4 [json_name = "creationHeight"];</code>
     * @return int|string
     */
    public function getCreationHeight()
    {
        return $this->creation_height;
    }

    /**
     * creation_height is the height which the unbonding took place.
     *
     * Generated from protobuf field <code>int64 creation_height = 4 [json_name = "creationHeight"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_height = $var;

        return $this;
    }

}

