<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/abci/v1beta1/abci.proto

namespace Cosmos\Base\Abci\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * StringEvent defines en Event object wrapper where all the attributes
 * contain key/value pairs that are strings instead of raw bytes.
 *
 * Generated from protobuf message <code>cosmos.base.abci.v1beta1.StringEvent</code>
 */
class StringEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string type = 1 [json_name = "type"];</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.abci.v1beta1.Attribute attributes = 2 [json_name = "attributes", (.gogoproto.nullable) = false];</code>
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *     @type array<\Cosmos\Base\Abci\V1beta1\Attribute>|\Google\Protobuf\Internal\RepeatedField $attributes
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Abci\V1beta1\GPBMetadata\Abci::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string type = 1 [json_name = "type"];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 1 [json_name = "type"];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.abci.v1beta1.Attribute attributes = 2 [json_name = "attributes", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.abci.v1beta1.Attribute attributes = 2 [json_name = "attributes", (.gogoproto.nullable) = false];</code>
     * @param array<\Cosmos\Base\Abci\V1beta1\Attribute>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\Abci\V1beta1\Attribute::class);
        $this->attributes = $arr;

        return $this;
    }

}
