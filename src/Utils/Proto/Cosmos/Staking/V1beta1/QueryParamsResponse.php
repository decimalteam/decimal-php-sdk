<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/query.proto

namespace Cosmos\Staking\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryParamsResponse is response type for the Query/Params RPC method.
 *
 * Generated from protobuf message <code>cosmos.staking.v1beta1.QueryParamsResponse</code>
 */
class QueryParamsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * params holds all the parameters of this module.
     *
     * Generated from protobuf field <code>.cosmos.staking.v1beta1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     */
    protected $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Staking\V1beta1\Params $params
     *           params holds all the parameters of this module.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Staking\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * params holds all the parameters of this module.
     *
     * Generated from protobuf field <code>.cosmos.staking.v1beta1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Staking\V1beta1\Params|null
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
     * params holds all the parameters of this module.
     *
     * Generated from protobuf field <code>.cosmos.staking.v1beta1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Staking\V1beta1\Params $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Staking\V1beta1\Params::class);
        $this->params = $var;

        return $this;
    }

}

