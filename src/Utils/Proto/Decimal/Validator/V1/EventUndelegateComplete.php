<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/events.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventUndelegateComplete defines event emitted when a undelegation is completed.
 *
 * Generated from protobuf message <code>decimal.validator.v1.EventUndelegateComplete</code>
 */
class EventUndelegateComplete extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string delegator = 1 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $delegator = '';
    /**
     * Generated from protobuf field <code>string validator = 2 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $validator = '';
    /**
     * Generated from protobuf field <code>.decimal.validator.v1.Stake stake = 3 [json_name = "stake", (.gogoproto.nullable) = false];</code>
     */
    protected $stake = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $delegator
     *     @type string $validator
     *     @type \Decimal\Validator\V1\Stake $stake
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string delegator = 1 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getDelegator()
    {
        return $this->delegator;
    }

    /**
     * Generated from protobuf field <code>string delegator = 1 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setDelegator($var)
    {
        GPBUtil::checkString($var, True);
        $this->delegator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string validator = 2 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Generated from protobuf field <code>string validator = 2 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setValidator($var)
    {
        GPBUtil::checkString($var, True);
        $this->validator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.decimal.validator.v1.Stake stake = 3 [json_name = "stake", (.gogoproto.nullable) = false];</code>
     * @return \Decimal\Validator\V1\Stake|null
     */
    public function getStake()
    {
        return $this->stake;
    }

    public function hasStake()
    {
        return isset($this->stake);
    }

    public function clearStake()
    {
        unset($this->stake);
    }

    /**
     * Generated from protobuf field <code>.decimal.validator.v1.Stake stake = 3 [json_name = "stake", (.gogoproto.nullable) = false];</code>
     * @param \Decimal\Validator\V1\Stake $var
     * @return $this
     */
    public function setStake($var)
    {
        GPBUtil::checkMessage($var, \Decimal\Validator\V1\Stake::class);
        $this->stake = $var;

        return $this;
    }

}

