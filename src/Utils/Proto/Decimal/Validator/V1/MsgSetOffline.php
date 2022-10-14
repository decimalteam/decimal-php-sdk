<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/tx.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgSetOffline defines a SDK message for turning off a validator from the blockchain consensus.
 *
 * Generated from protobuf message <code>decimal.validator.v1.MsgSetOffline</code>
 */
class MsgSetOffline extends \Google\Protobuf\Internal\Message
{
    /**
     * validator is the bech32-encoded address of the validator.
     *
     * Generated from protobuf field <code>string validator = 1 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $validator = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $validator
     *           validator is the bech32-encoded address of the validator.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Tx::initOnce();
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

}

