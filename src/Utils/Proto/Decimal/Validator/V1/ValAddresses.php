<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/validator.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ValAddresses defines a repeated set of validator addresses.
 *
 * Generated from protobuf message <code>decimal.validator.v1.ValAddresses</code>
 */
class ValAddresses extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string addresses = 1 [json_name = "addresses", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    private $addresses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $addresses
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Validator::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string addresses = 1 [json_name = "addresses", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Generated from protobuf field <code>repeated string addresses = 1 [json_name = "addresses", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->addresses = $arr;

        return $this;
    }

}
