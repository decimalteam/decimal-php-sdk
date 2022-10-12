<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/fee/v1/genesis.proto

namespace Decimal\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the module's genesis state.
 *
 * Generated from protobuf message <code>decimal.fee.v1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * prices defines complete list of initial coin prices.
     *
     * Generated from protobuf field <code>repeated .decimal.fee.v1.CoinPrice prices = 2 [json_name = "prices", (.gogoproto.nullable) = false];</code>
     */
    private $prices;
    /**
     * params defines all the module's parameters.
     *
     * Generated from protobuf field <code>.decimal.fee.v1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     */
    protected $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Decimal\Fee\V1\CoinPrice[]|\Google\Protobuf\Internal\RepeatedField $prices
     *           prices defines complete list of initial coin prices.
     *     @type \Decimal\Fee\V1\Params $params
     *           params defines all the module's parameters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Fee\V1\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * prices defines complete list of initial coin prices.
     *
     * Generated from protobuf field <code>repeated .decimal.fee.v1.CoinPrice prices = 2 [json_name = "prices", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * prices defines complete list of initial coin prices.
     *
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

    /**
     * params defines all the module's parameters.
     *
     * Generated from protobuf field <code>.decimal.fee.v1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @return \Decimal\Fee\V1\Params|null
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
     * params defines all the module's parameters.
     *
     * Generated from protobuf field <code>.decimal.fee.v1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @param \Decimal\Fee\V1\Params $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Decimal\Fee\V1\Params::class);
        $this->params = $var;

        return $this;
    }

}

