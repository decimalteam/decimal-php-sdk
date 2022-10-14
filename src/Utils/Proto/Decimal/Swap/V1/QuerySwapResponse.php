<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/swap/v1/query.proto

namespace Decimal\Swap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QuerySwapResponse is response type for the Query/Swap RPC method.
 *
 * Generated from protobuf message <code>decimal.swap.v1.QuerySwapResponse</code>
 */
class QuerySwapResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.decimal.swap.v1.Swap swap = 1 [json_name = "swap", (.gogoproto.nullable) = false];</code>
     */
    protected $swap = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Decimal\Swap\V1\Swap $swap
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Swap\V1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.decimal.swap.v1.Swap swap = 1 [json_name = "swap", (.gogoproto.nullable) = false];</code>
     * @return \Decimal\Swap\V1\Swap|null
     */
    public function getSwap()
    {
        return $this->swap;
    }

    public function hasSwap()
    {
        return isset($this->swap);
    }

    public function clearSwap()
    {
        unset($this->swap);
    }

    /**
     * Generated from protobuf field <code>.decimal.swap.v1.Swap swap = 1 [json_name = "swap", (.gogoproto.nullable) = false];</code>
     * @param \Decimal\Swap\V1\Swap $var
     * @return $this
     */
    public function setSwap($var)
    {
        GPBUtil::checkMessage($var, \Decimal\Swap\V1\Swap::class);
        $this->swap = $var;

        return $this;
    }

}
