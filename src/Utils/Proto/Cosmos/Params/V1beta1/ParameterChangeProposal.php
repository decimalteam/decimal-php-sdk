<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/params/v1beta1/params.proto

namespace Cosmos\Params\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ParameterChangeProposal defines a proposal to change one or more parameters.
 *
 * Generated from protobuf message <code>cosmos.params.v1beta1.ParameterChangeProposal</code>
 */
class ParameterChangeProposal extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string title = 1 [json_name = "title"];</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>repeated .cosmos.params.v1beta1.ParamChange changes = 3 [json_name = "changes", (.gogoproto.nullable) = false];</code>
     */
    private $changes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type string $description
     *     @type array<\Cosmos\Params\V1beta1\ParamChange>|\Google\Protobuf\Internal\RepeatedField $changes
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Params\V1beta1\GPBMetadata\Params::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string title = 1 [json_name = "title"];</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 1 [json_name = "title"];</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
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
     * Generated from protobuf field <code>repeated .cosmos.params.v1beta1.ParamChange changes = 3 [json_name = "changes", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.params.v1beta1.ParamChange changes = 3 [json_name = "changes", (.gogoproto.nullable) = false];</code>
     * @param array<\Cosmos\Params\V1beta1\ParamChange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Params\V1beta1\ParamChange::class);
        $this->changes = $arr;

        return $this;
    }

}

