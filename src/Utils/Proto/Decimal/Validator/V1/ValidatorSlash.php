<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/events.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ValidatorSlash contains the detailed validator slash.
 *
 * Generated from protobuf message <code>decimal.validator.v1.ValidatorSlash</code>
 */
class ValidatorSlash extends \Google\Protobuf\Internal\Message
{
    /**
     * validator is the bech32-encoded address of the validator.
     *
     * Generated from protobuf field <code>string validator = 1 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $validator = '';
    /**
     * delegators is the complete list of delegator rewards.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.DelegatorSlash delegators = 6 [json_name = "delegators", (.gogoproto.nullable) = false];</code>
     */
    private $delegators;
    /**
     * Generated from protobuf field <code>repeated .decimal.validator.v1.UndelegateSlash undelegations = 7 [json_name = "undelegations", (.gogoproto.nullable) = false];</code>
     */
    private $undelegations;
    /**
     * Generated from protobuf field <code>repeated .decimal.validator.v1.RedelegateSlash redelegations = 8 [json_name = "redelegations", (.gogoproto.nullable) = false];</code>
     */
    private $redelegations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $validator
     *           validator is the bech32-encoded address of the validator.
     *     @type array<\Decimal\Validator\V1\DelegatorSlash>|\Google\Protobuf\Internal\RepeatedField $delegators
     *           delegators is the complete list of delegator rewards.
     *     @type array<\Decimal\Validator\V1\UndelegateSlash>|\Google\Protobuf\Internal\RepeatedField $undelegations
     *     @type array<\Decimal\Validator\V1\RedelegateSlash>|\Google\Protobuf\Internal\RepeatedField $redelegations
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * validator is the bech32-encoded address of the validator.
     *
     * Generated from protobuf field <code>string validator = 1 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * validator is the bech32-encoded address of the validator.
     *
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
     * delegators is the complete list of delegator rewards.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.DelegatorSlash delegators = 6 [json_name = "delegators", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDelegators()
    {
        return $this->delegators;
    }

    /**
     * delegators is the complete list of delegator rewards.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.DelegatorSlash delegators = 6 [json_name = "delegators", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\DelegatorSlash>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDelegators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\DelegatorSlash::class);
        $this->delegators = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.validator.v1.UndelegateSlash undelegations = 7 [json_name = "undelegations", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUndelegations()
    {
        return $this->undelegations;
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.validator.v1.UndelegateSlash undelegations = 7 [json_name = "undelegations", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\UndelegateSlash>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUndelegations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\UndelegateSlash::class);
        $this->undelegations = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.validator.v1.RedelegateSlash redelegations = 8 [json_name = "redelegations", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRedelegations()
    {
        return $this->redelegations;
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.validator.v1.RedelegateSlash redelegations = 8 [json_name = "redelegations", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\RedelegateSlash>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRedelegations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\RedelegateSlash::class);
        $this->redelegations = $arr;

        return $this;
    }

}

