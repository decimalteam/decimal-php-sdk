<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/validator.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Undelegation stores all of a single delegator's unbonding bonds
 * for a single validator in an time-ordered list.
 *
 * Generated from protobuf message <code>decimal.validator.v1.Undelegation</code>
 */
class Undelegation extends \Google\Protobuf\Internal\Message
{
    /**
     * delegator is the bech32-encoded address of the delegator.
     *
     * Generated from protobuf field <code>string delegator = 1 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $delegator = '';
    /**
     * validator is the bech32-encoded address of the validator.
     *
     * Generated from protobuf field <code>string validator = 2 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $validator = '';
    /**
     * entries are the unbonding delegation entries.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.UndelegationEntry entries = 3 [json_name = "entries", (.gogoproto.nullable) = false];</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $delegator
     *           delegator is the bech32-encoded address of the delegator.
     *     @type string $validator
     *           validator is the bech32-encoded address of the validator.
     *     @type array<\Decimal\Validator\V1\UndelegationEntry>|\Google\Protobuf\Internal\RepeatedField $entries
     *           entries are the unbonding delegation entries.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Validator::initOnce();
        parent::__construct($data);
    }

    /**
     * delegator is the bech32-encoded address of the delegator.
     *
     * Generated from protobuf field <code>string delegator = 1 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getDelegator()
    {
        return $this->delegator;
    }

    /**
     * delegator is the bech32-encoded address of the delegator.
     *
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
     * validator is the bech32-encoded address of the validator.
     *
     * Generated from protobuf field <code>string validator = 2 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * validator is the bech32-encoded address of the validator.
     *
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
     * entries are the unbonding delegation entries.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.UndelegationEntry entries = 3 [json_name = "entries", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * entries are the unbonding delegation entries.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.UndelegationEntry entries = 3 [json_name = "entries", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\UndelegationEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\UndelegationEntry::class);
        $this->entries = $arr;

        return $this;
    }

}

