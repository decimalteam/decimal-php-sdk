<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/events.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventSlash defines event emitted when a validator is slashed.
 *
 * Generated from protobuf message <code>decimal.validator.v1.EventSlash</code>
 */
class EventSlash extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string validator = 1 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $validator = '';
    /**
     * Generated from protobuf field <code>repeated .decimal.validator.v1.DelegatorSlash delegators = 2 [json_name = "delegators", (.gogoproto.nullable) = false];</code>
     */
    private $delegators;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $validator
     *     @type array<\Decimal\Validator\V1\DelegatorSlash>|\Google\Protobuf\Internal\RepeatedField $delegators
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string validator = 1 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Generated from protobuf field <code>string validator = 1 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
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
     * Generated from protobuf field <code>repeated .decimal.validator.v1.DelegatorSlash delegators = 2 [json_name = "delegators", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDelegators()
    {
        return $this->delegators;
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.validator.v1.DelegatorSlash delegators = 2 [json_name = "delegators", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\DelegatorSlash>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDelegators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\DelegatorSlash::class);
        $this->delegators = $arr;

        return $this;
    }

}

