<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/fee/v1/events.proto

namespace Decimal\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventUpdateCoinPrices defines event emitted when coin prices are updated.
 *
 * Generated from protobuf message <code>decimal.fee.v1.EventUpdateCoinPrices</code>
 */
class EventUpdateCoinPrices extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string oracle = 1 [json_name = "oracle", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $oracle = '';
    /**
     * Generated from protobuf field <code>repeated .decimal.fee.v1.CoinPrice prices = 2 [json_name = "prices", (.gogoproto.nullable) = false];</code>
     */
    private $prices;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $oracle
     *     @type \Decimal\Fee\V1\CoinPrice[]|\Google\Protobuf\Internal\RepeatedField $prices
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Fee\V1\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string oracle = 1 [json_name = "oracle", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getOracle()
    {
        return $this->oracle;
    }

    /**
     * Generated from protobuf field <code>string oracle = 1 [json_name = "oracle", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setOracle($var)
    {
        GPBUtil::checkString($var, True);
        $this->oracle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.fee.v1.CoinPrice prices = 2 [json_name = "prices", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.fee.v1.CoinPrice prices = 2 [json_name = "prices", (.gogoproto.nullable) = false];</code>
     * @param \Decimal\Fee\V1\CoinPrice[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Fee\V1\CoinPrice::class);
        $this->prices = $arr;

        return $this;
    }

}

