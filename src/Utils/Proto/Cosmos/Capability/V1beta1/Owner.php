<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/capability/v1beta1/capability.proto

namespace Cosmos\Capability\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Owner defines a single capability owner. An owner is defined by the name of
 * capability and the module name.
 *
 * Generated from protobuf message <code>cosmos.capability.v1beta1.Owner</code>
 */
class Owner extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string module = 1 [json_name = "module", (.gogoproto.moretags) = "yaml:\"module\""];</code>
     */
    protected $module = '';
    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.gogoproto.moretags) = "yaml:\"name\""];</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $module
     *     @type string $name
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Capability\V1beta1\GPBMetadata\Capability::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string module = 1 [json_name = "module", (.gogoproto.moretags) = "yaml:\"module\""];</code>
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Generated from protobuf field <code>string module = 1 [json_name = "module", (.gogoproto.moretags) = "yaml:\"module\""];</code>
     * @param string $var
     * @return $this
     */
    public function setModule($var)
    {
        GPBUtil::checkString($var, True);
        $this->module = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.gogoproto.moretags) = "yaml:\"name\""];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.gogoproto.moretags) = "yaml:\"name\""];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

