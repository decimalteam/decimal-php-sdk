<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1beta1/query.proto

namespace Cosmos\Gov\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryParamsRequest is the request type for the Query/Params RPC method.
 *
 * Generated from protobuf message <code>cosmos.gov.v1beta1.QueryParamsRequest</code>
 */
class QueryParamsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * params_type defines which parameters to query for, can be one of "voting",
     * "tallying" or "deposit".
     *
     * Generated from protobuf field <code>string params_type = 1 [json_name = "paramsType"];</code>
     */
    protected $params_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $params_type
     *           params_type defines which parameters to query for, can be one of "voting",
     *           "tallying" or "deposit".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Gov\V1Beta1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * params_type defines which parameters to query for, can be one of "voting",
     * "tallying" or "deposit".
     *
     * Generated from protobuf field <code>string params_type = 1 [json_name = "paramsType"];</code>
     * @return string
     */
    public function getParamsType()
    {
        return $this->params_type;
    }

    /**
     * params_type defines which parameters to query for, can be one of "voting",
     * "tallying" or "deposit".
     *
     * Generated from protobuf field <code>string params_type = 1 [json_name = "paramsType"];</code>
     * @param string $var
     * @return $this
     */
    public function setParamsType($var)
    {
        GPBUtil::checkString($var, True);
        $this->params_type = $var;

        return $this;
    }

}

