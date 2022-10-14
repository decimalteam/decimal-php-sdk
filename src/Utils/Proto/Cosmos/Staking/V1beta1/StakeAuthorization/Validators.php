<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/authz.proto

namespace Cosmos\Staking\V1beta1\StakeAuthorization;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Validators defines list of validator addresses.
 *
 * Generated from protobuf message <code>cosmos.staking.v1beta1.StakeAuthorization.Validators</code>
 */
class Validators extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string address = 1 [json_name = "address"];</code>
     */
    private $address;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $address
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Staking\V1beta1\GPBMetadata\Authz::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string address = 1 [json_name = "address"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>repeated string address = 1 [json_name = "address"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAddress($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->address = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Validators::class, \Cosmos\Staking\V1beta1\StakeAuthorization_Validators::class);

