<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/query.proto

namespace Cosmos\Staking\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryPoolResponse is response type for the Query/Pool RPC method.
 *
 * Generated from protobuf message <code>cosmos.staking.v1beta1.QueryPoolResponse</code>
 */
class QueryPoolResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * pool defines the pool info.
     *
     * Generated from protobuf field <code>.cosmos.staking.v1beta1.Pool pool = 1 [json_name = "pool", (.gogoproto.nullable) = false];</code>
     */
    protected $pool = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Staking\V1beta1\Pool $pool
     *           pool defines the pool info.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Staking\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * pool defines the pool info.
     *
     * Generated from protobuf field <code>.cosmos.staking.v1beta1.Pool pool = 1 [json_name = "pool", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Staking\V1beta1\Pool|null
     */
    public function getPool()
    {
        return $this->pool;
    }

    public function hasPool()
    {
        return isset($this->pool);
    }

    public function clearPool()
    {
        unset($this->pool);
    }

    /**
     * pool defines the pool info.
     *
     * Generated from protobuf field <code>.cosmos.staking.v1beta1.Pool pool = 1 [json_name = "pool", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Staking\V1beta1\Pool $var
     * @return $this
     */
    public function setPool($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Staking\V1beta1\Pool::class);
        $this->pool = $var;

        return $this;
    }

}

