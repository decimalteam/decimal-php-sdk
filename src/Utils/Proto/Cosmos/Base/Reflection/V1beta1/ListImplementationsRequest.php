<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/reflection/v1beta1/reflection.proto

namespace Cosmos\Base\Reflection\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListImplementationsRequest is the request type of the ListImplementations
 * RPC.
 *
 * Generated from protobuf message <code>cosmos.base.reflection.v1beta1.ListImplementationsRequest</code>
 */
class ListImplementationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * interface_name defines the interface to query the implementations for.
     *
     * Generated from protobuf field <code>string interface_name = 1 [json_name = "interfaceName"];</code>
     */
    protected $interface_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $interface_name
     *           interface_name defines the interface to query the implementations for.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Reflection\V1beta1\GPBMetadata\Reflection::initOnce();
        parent::__construct($data);
    }

    /**
     * interface_name defines the interface to query the implementations for.
     *
     * Generated from protobuf field <code>string interface_name = 1 [json_name = "interfaceName"];</code>
     * @return string
     */
    public function getInterfaceName()
    {
        return $this->interface_name;
    }

    /**
     * interface_name defines the interface to query the implementations for.
     *
     * Generated from protobuf field <code>string interface_name = 1 [json_name = "interfaceName"];</code>
     * @param string $var
     * @return $this
     */
    public function setInterfaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->interface_name = $var;

        return $this;
    }

}

