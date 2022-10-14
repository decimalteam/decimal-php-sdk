<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/query.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryValidatorResponse is response type for the Query/Validator RPC method.
 *
 * Generated from protobuf message <code>decimal.validator.v1.QueryValidatorResponse</code>
 */
class QueryValidatorResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * validator defines the validator info.
     *
     * Generated from protobuf field <code>.decimal.validator.v1.Validator validator = 1 [json_name = "validator", (.gogoproto.nullable) = false];</code>
     */
    protected $validator = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Decimal\Validator\V1\Validator $validator
     *           validator defines the validator info.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * validator defines the validator info.
     *
     * Generated from protobuf field <code>.decimal.validator.v1.Validator validator = 1 [json_name = "validator", (.gogoproto.nullable) = false];</code>
     * @return \Decimal\Validator\V1\Validator|null
     */
    public function getValidator()
    {
        return $this->validator;
    }

    public function hasValidator()
    {
        return isset($this->validator);
    }

    public function clearValidator()
    {
        unset($this->validator);
    }

    /**
     * validator defines the validator info.
     *
     * Generated from protobuf field <code>.decimal.validator.v1.Validator validator = 1 [json_name = "validator", (.gogoproto.nullable) = false];</code>
     * @param \Decimal\Validator\V1\Validator $var
     * @return $this
     */
    public function setValidator($var)
    {
        GPBUtil::checkMessage($var, \Decimal\Validator\V1\Validator::class);
        $this->validator = $var;

        return $this;
    }

}
