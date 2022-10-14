<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/abci/v1beta1/abci.proto

namespace Cosmos\Base\Abci\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Attribute defines an attribute wrapper where the key and value are
 * strings instead of raw bytes.
 *
 * Generated from protobuf message <code>cosmos.base.abci.v1beta1.Attribute</code>
 */
class Attribute extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string key = 1 [json_name = "key"];</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>string value = 2 [json_name = "value"];</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *     @type string $value
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Abci\V1beta1\GPBMetadata\Abci::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string key = 1 [json_name = "key"];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 1 [json_name = "key"];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string value = 2 [json_name = "value"];</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 2 [json_name = "value"];</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}

