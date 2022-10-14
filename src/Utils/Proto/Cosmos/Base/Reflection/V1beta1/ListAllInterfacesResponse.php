<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/reflection/v1beta1/reflection.proto

namespace Cosmos\Base\Reflection\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListAllInterfacesResponse is the response type of the ListAllInterfaces RPC.
 *
 * Generated from protobuf message <code>cosmos.base.reflection.v1beta1.ListAllInterfacesResponse</code>
 */
class ListAllInterfacesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * interface_names is an array of all the registered interfaces.
     *
     * Generated from protobuf field <code>repeated string interface_names = 1 [json_name = "interfaceNames"];</code>
     */
    private $interface_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $interface_names
     *           interface_names is an array of all the registered interfaces.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Reflection\V1beta1\GPBMetadata\Reflection::initOnce();
        parent::__construct($data);
    }

    /**
     * interface_names is an array of all the registered interfaces.
     *
     * Generated from protobuf field <code>repeated string interface_names = 1 [json_name = "interfaceNames"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInterfaceNames()
    {
        return $this->interface_names;
    }

    /**
     * interface_names is an array of all the registered interfaces.
     *
     * Generated from protobuf field <code>repeated string interface_names = 1 [json_name = "interfaceNames"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInterfaceNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->interface_names = $arr;

        return $this;
    }

}

