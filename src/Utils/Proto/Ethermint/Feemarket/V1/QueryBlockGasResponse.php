<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/feemarket/v1/query.proto

namespace Ethermint\Feemarket\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryBlockGasResponse returns block gas used for a given height.
 *
 * Generated from protobuf message <code>ethermint.feemarket.v1.QueryBlockGasResponse</code>
 */
class QueryBlockGasResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 gas = 1 [json_name = "gas"];</code>
     */
    protected $gas = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $gas
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Feemarket\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 gas = 1 [json_name = "gas"];</code>
     * @return int|string
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * Generated from protobuf field <code>int64 gas = 1 [json_name = "gas"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setGas($var)
    {
        GPBUtil::checkInt64($var);
        $this->gas = $var;

        return $this;
    }

}

