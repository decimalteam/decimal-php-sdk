<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/fee/v1/query.proto

namespace Decimal\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryCoinPriceRequest is request type for the Query/CoinPrice RPC method.
 *
 * Generated from protobuf message <code>decimal.fee.v1.QueryCoinPriceRequest</code>
 */
class QueryCoinPriceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * denom defines the base currency (coin) denomination which is priced.
     *
     * Generated from protobuf field <code>string denom = 1 [json_name = "denom"];</code>
     */
    protected $denom = '';
    /**
     * quote defines the quote currency denomination in the pair (USD as the first example).
     *
     * Generated from protobuf field <code>string quote = 2 [json_name = "quote"];</code>
     */
    protected $quote = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $denom
     *           denom defines the base currency (coin) denomination which is priced.
     *     @type string $quote
     *           quote defines the quote currency denomination in the pair (USD as the first example).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Fee\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * denom defines the base currency (coin) denomination which is priced.
     *
     * Generated from protobuf field <code>string denom = 1 [json_name = "denom"];</code>
     * @return string
     */
    public function getDenom()
    {
        return $this->denom;
    }

    /**
     * denom defines the base currency (coin) denomination which is priced.
     *
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
     * quote defines the quote currency denomination in the pair (USD as the first example).
     *
     * Generated from protobuf field <code>string quote = 2 [json_name = "quote"];</code>
     * @return string
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * quote defines the quote currency denomination in the pair (USD as the first example).
     *
     * Generated from protobuf field <code>string quote = 2 [json_name = "quote"];</code>
     * @param string $var
     * @return $this
     */
    public function setQuote($var)
    {
        GPBUtil::checkString($var, True);
        $this->quote = $var;

        return $this;
    }

}

