<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/fee/v1/query.proto

namespace Ibc\Applications\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryTotalTimeoutFeesResponse defines the response type for the TotalTimeoutFees rpc
 *
 * Generated from protobuf message <code>ibc.applications.fee.v1.QueryTotalTimeoutFeesResponse</code>
 */
class QueryTotalTimeoutFeesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * the total packet timeout fees
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin timeout_fees = 1 [json_name = "timeoutFees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"timeout_fees\"", (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     */
    private $timeout_fees;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Base\V1beta1\Coin[]|\Google\Protobuf\Internal\RepeatedField $timeout_fees
     *           the total packet timeout fees
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\Fee\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * the total packet timeout fees
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin timeout_fees = 1 [json_name = "timeoutFees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"timeout_fees\"", (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTimeoutFees()
    {
        return $this->timeout_fees;
    }

    /**
     * the total packet timeout fees
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin timeout_fees = 1 [json_name = "timeoutFees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"timeout_fees\"", (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @param \Cosmos\Base\V1beta1\Coin[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTimeoutFees($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\Coin::class);
        $this->timeout_fees = $arr;

        return $this;
    }

}

