<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/group/v1/events.proto

namespace Cosmos\Group\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventCreateGroupPolicy is an event emitted when a group policy is created.
 *
 * Generated from protobuf message <code>cosmos.group.v1.EventCreateGroupPolicy</code>
 */
class EventCreateGroupPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * address is the account address of the group policy.
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           address is the account address of the group policy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Group\V1\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * address is the account address of the group policy.
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * address is the account address of the group policy.
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

}

