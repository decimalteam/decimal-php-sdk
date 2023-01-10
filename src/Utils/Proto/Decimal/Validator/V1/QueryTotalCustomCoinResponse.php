<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/query.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>decimal.validator.v1.QueryTotalCustomCoinResponse</code>
 */
class QueryTotalCustomCoinResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string total_amount = 1 [json_name = "totalAmount", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     */
    protected $total_amount = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $total_amount
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string total_amount = 1 [json_name = "totalAmount", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->total_amount;
    }

    /**
     * Generated from protobuf field <code>string total_amount = 1 [json_name = "totalAmount", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setTotalAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->total_amount = $var;

        return $this;
    }

}

