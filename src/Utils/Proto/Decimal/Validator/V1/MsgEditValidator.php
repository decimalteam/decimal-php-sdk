<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/tx.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgEditValidator defines a SDK message for editing an existing validator.
 *
 * Generated from protobuf message <code>decimal.validator.v1.MsgEditValidator</code>
 */
class MsgEditValidator extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string operator_address = 1 [json_name = "operatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $operator_address = '';
    /**
     * Generated from protobuf field <code>string reward_address = 2 [json_name = "rewardAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $reward_address = '';
    /**
     * Generated from protobuf field <code>.decimal.validator.v1.Description description = 3 [json_name = "description", (.gogoproto.nullable) = false];</code>
     */
    protected $description = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $operator_address
     *     @type string $reward_address
     *     @type \Decimal\Validator\V1\Description $description
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string operator_address = 1 [json_name = "operatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getOperatorAddress()
    {
        return $this->operator_address;
    }

    /**
     * Generated from protobuf field <code>string operator_address = 1 [json_name = "operatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setOperatorAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->operator_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reward_address = 2 [json_name = "rewardAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getRewardAddress()
    {
        return $this->reward_address;
    }

    /**
     * Generated from protobuf field <code>string reward_address = 2 [json_name = "rewardAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setRewardAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->reward_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.decimal.validator.v1.Description description = 3 [json_name = "description", (.gogoproto.nullable) = false];</code>
     * @return \Decimal\Validator\V1\Description|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Generated from protobuf field <code>.decimal.validator.v1.Description description = 3 [json_name = "description", (.gogoproto.nullable) = false];</code>
     * @param \Decimal\Validator\V1\Description $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Decimal\Validator\V1\Description::class);
        $this->description = $var;

        return $this;
    }

}

