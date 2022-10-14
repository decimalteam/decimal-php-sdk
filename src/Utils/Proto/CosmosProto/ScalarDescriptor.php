<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos_proto/cosmos.proto

namespace CosmosProto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ScalarDescriptor describes an scalar type to be used with
 * the scalar field option and declared by declare_scalar.
 * Scalars extend simple protobuf built-in types with additional
 * syntax and semantics, for instance to represent big integers.
 * Scalars should ideally define an encoding such that there is only one
 * valid syntactical representation for a given semantic meaning,
 * i.e. the encoding should be deterministic.
 *
 * Generated from protobuf message <code>cosmos_proto.ScalarDescriptor</code>
 */
class ScalarDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * name is the name of the scalar. It should be a short-name (without
     * a period) such that the fully qualified name of the scalar will be
     * package.name, ex. for the package a.b and scalar named C, the
     * fully-qualified name will be a.b.C.
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     */
    protected $name = '';
    /**
     * description is a human-readable description of the scalar and its
     * encoding format. For instance a big integer or decimal scalar should
     * specify precisely the expected encoding format.
     *
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     */
    protected $description = '';
    /**
     * field_type is the type of field with which this scalar can be used.
     * Scalars can be used with one and only one type of field so that
     * encoding standards and simple and clear. Currently only string and
     * bytes fields are supported for scalars.
     *
     * Generated from protobuf field <code>repeated .cosmos_proto.ScalarType field_type = 3 [json_name = "fieldType"];</code>
     */
    private $field_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           name is the name of the scalar. It should be a short-name (without
     *           a period) such that the fully qualified name of the scalar will be
     *           package.name, ex. for the package a.b and scalar named C, the
     *           fully-qualified name will be a.b.C.
     *     @type string $description
     *           description is a human-readable description of the scalar and its
     *           encoding format. For instance a big integer or decimal scalar should
     *           specify precisely the expected encoding format.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $field_type
     *           field_type is the type of field with which this scalar can be used.
     *           Scalars can be used with one and only one type of field so that
     *           encoding standards and simple and clear. Currently only string and
     *           bytes fields are supported for scalars.
     * }
     */
    public function __construct($data = NULL) {
        \CosmosProto\GPBMetadata\Cosmos::initOnce();
        parent::__construct($data);
    }

    /**
     * name is the name of the scalar. It should be a short-name (without
     * a period) such that the fully qualified name of the scalar will be
     * package.name, ex. for the package a.b and scalar named C, the
     * fully-qualified name will be a.b.C.
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * name is the name of the scalar. It should be a short-name (without
     * a period) such that the fully qualified name of the scalar will be
     * package.name, ex. for the package a.b and scalar named C, the
     * fully-qualified name will be a.b.C.
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * description is a human-readable description of the scalar and its
     * encoding format. For instance a big integer or decimal scalar should
     * specify precisely the expected encoding format.
     *
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * description is a human-readable description of the scalar and its
     * encoding format. For instance a big integer or decimal scalar should
     * specify precisely the expected encoding format.
     *
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * field_type is the type of field with which this scalar can be used.
     * Scalars can be used with one and only one type of field so that
     * encoding standards and simple and clear. Currently only string and
     * bytes fields are supported for scalars.
     *
     * Generated from protobuf field <code>repeated .cosmos_proto.ScalarType field_type = 3 [json_name = "fieldType"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFieldType()
    {
        return $this->field_type;
    }

    /**
     * field_type is the type of field with which this scalar can be used.
     * Scalars can be used with one and only one type of field so that
     * encoding standards and simple and clear. Currently only string and
     * bytes fields are supported for scalars.
     *
     * Generated from protobuf field <code>repeated .cosmos_proto.ScalarType field_type = 3 [json_name = "fieldType"];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFieldType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \CosmosProto\ScalarType::class);
        $this->field_type = $arr;

        return $this;
    }

}
