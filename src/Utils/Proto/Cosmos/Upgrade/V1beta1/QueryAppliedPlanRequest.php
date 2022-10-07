<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/upgrade/v1beta1/query.proto

namespace Cosmos\Upgrade\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryCurrentPlanRequest is the request type for the Query/AppliedPlan RPC
 * method.
 *
 * Generated from protobuf message <code>cosmos.upgrade.v1beta1.QueryAppliedPlanRequest</code>
 */
class QueryAppliedPlanRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * name is the name of the applied plan to query for.
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           name is the name of the applied plan to query for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Upgrade\V1Beta1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * name is the name of the applied plan to query for.
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * name is the name of the applied plan to query for.
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

}

