<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/swap/v1/query.proto

namespace Decimal\Swap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryActiveSwapsResponse is response type for the Query/ActiveSwaps RPC method.
 *
 * Generated from protobuf message <code>decimal.swap.v1.QueryActiveSwapsResponse</code>
 */
class QueryActiveSwapsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .decimal.swap.v1.Swap swaps = 1 [json_name = "swaps", (.gogoproto.nullable) = false];</code>
     */
    private $swaps;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Decimal\Swap\V1\Swap>|\Google\Protobuf\Internal\RepeatedField $swaps
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Swap\V1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.swap.v1.Swap swaps = 1 [json_name = "swaps", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSwaps()
    {
        return $this->swaps;
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.swap.v1.Swap swaps = 1 [json_name = "swaps", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Swap\V1\Swap>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSwaps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Swap\V1\Swap::class);
        $this->swaps = $arr;

        return $this;
    }

}

