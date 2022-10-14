<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/v1beta1/coin.proto

namespace Cosmos\Base\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Coin defines a token with a denomination and an amount.
 * NOTE: The amount field is an Int which implements the custom method
 * signatures required by gogoproto.
 *
 * Generated from protobuf message <code>cosmos.base.v1beta1.Coin</code>
 */
class Coin extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string denom = 1 [json_name = "denom"];</code>
     */
    protected $denom = '';
    /**
     * Generated from protobuf field <code>string amount = 2 [json_name = "amount", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "Int"];</code>
     */
    protected $amount = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $denom
     *     @type string $amount
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\V1beta1\GPBMetadata\Coin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string denom = 1 [json_name = "denom"];</code>
     * @return string
     */
    public function getDenom()
    {
        return $this->denom;
    }

    /**
     * Generated from protobuf field <code>string denom = 1 [json_name = "denom"];</code>
     * @param string $var
     * @return $this
     */
    public function setDenom($var)
    {
        GPBUtil::checkString($var, True);
        $this->denom = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string amount = 2 [json_name = "amount", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "Int"];</code>
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>string amount = 2 [json_name = "amount", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->amount = $var;

        return $this;
    }

}
