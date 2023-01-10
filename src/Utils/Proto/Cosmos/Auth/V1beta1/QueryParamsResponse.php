<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/auth/v1beta1/query.proto

namespace Cosmos\Auth\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryParamsResponse is the response type for the Query/Params RPC method.
 *
 * Generated from protobuf message <code>cosmos.auth.v1beta1.QueryParamsResponse</code>
 */
class QueryParamsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * params defines the parameters of the module.
     *
     * Generated from protobuf field <code>.cosmos.auth.v1beta1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     */
    protected $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Auth\V1beta1\Params $params
     *           params defines the parameters of the module.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Auth\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * params defines the parameters of the module.
     *
     * Generated from protobuf field <code>.cosmos.auth.v1beta1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Auth\V1beta1\Params|null
     */
    public function getParams()
    {
        return $this->params;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * params defines the parameters of the module.
     *
     * Generated from protobuf field <code>.cosmos.auth.v1beta1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Auth\V1beta1\Params $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Auth\V1beta1\Params::class);
        $this->params = $var;

        return $this;
    }

}

