<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/reflection/v2alpha1/reflection.proto

namespace Cosmos\Base\Reflection\V2alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * InterfaceAcceptingMessageDescriptor describes a protobuf message which contains
 * an interface represented as a google.protobuf.Any
 *
 * Generated from protobuf message <code>cosmos.base.reflection.v2alpha1.InterfaceAcceptingMessageDescriptor</code>
 */
class InterfaceAcceptingMessageDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * fullname is the protobuf fullname of the type containing the interface
     *
     * Generated from protobuf field <code>string fullname = 1 [json_name = "fullname"];</code>
     */
    protected $fullname = '';
    /**
     * field_descriptor_names is a list of the protobuf name (not fullname) of the field
     * which contains the interface as google.protobuf.Any (the interface is the same, but
     * it can be in multiple fields of the same proto message)
     *
     * Generated from protobuf field <code>repeated string field_descriptor_names = 2 [json_name = "fieldDescriptorNames"];</code>
     */
    private $field_descriptor_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fullname
     *           fullname is the protobuf fullname of the type containing the interface
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $field_descriptor_names
     *           field_descriptor_names is a list of the protobuf name (not fullname) of the field
     *           which contains the interface as google.protobuf.Any (the interface is the same, but
     *           it can be in multiple fields of the same proto message)
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Reflection\V2alpha1\GPBMetadata\Reflection::initOnce();
        parent::__construct($data);
    }

    /**
     * fullname is the protobuf fullname of the type containing the interface
     *
     * Generated from protobuf field <code>string fullname = 1 [json_name = "fullname"];</code>
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * fullname is the protobuf fullname of the type containing the interface
     *
     * Generated from protobuf field <code>string fullname = 1 [json_name = "fullname"];</code>
     * @param string $var
     * @return $this
     */
    public function setFullname($var)
    {
        GPBUtil::checkString($var, True);
        $this->fullname = $var;

        return $this;
    }

    /**
     * field_descriptor_names is a list of the protobuf name (not fullname) of the field
     * which contains the interface as google.protobuf.Any (the interface is the same, but
     * it can be in multiple fields of the same proto message)
     *
     * Generated from protobuf field <code>repeated string field_descriptor_names = 2 [json_name = "fieldDescriptorNames"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFieldDescriptorNames()
    {
        return $this->field_descriptor_names;
    }

    /**
     * field_descriptor_names is a list of the protobuf name (not fullname) of the field
     * which contains the interface as google.protobuf.Any (the interface is the same, but
     * it can be in multiple fields of the same proto message)
     *
     * Generated from protobuf field <code>repeated string field_descriptor_names = 2 [json_name = "fieldDescriptorNames"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFieldDescriptorNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->field_descriptor_names = $arr;

        return $this;
    }

}

