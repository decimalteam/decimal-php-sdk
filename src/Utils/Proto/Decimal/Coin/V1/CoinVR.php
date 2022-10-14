<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/coin/v1/coin.proto

namespace Decimal\Coin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CoinVR defines object containing just volume and reserve of the coin.
 *
 * Generated from protobuf message <code>decimal.coin.v1.CoinVR</code>
 */
class CoinVR extends \Google\Protobuf\Internal\Message
{
    /**
     * volume defines the coin supply.
     *
     * Generated from protobuf field <code>string volume = 1 [json_name = "volume", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     */
    protected $volume = '';
    /**
     * reserve defines the coin reserve in base coin.
     *
     * Generated from protobuf field <code>string reserve = 2 [json_name = "reserve", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     */
    protected $reserve = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $volume
     *           volume defines the coin supply.
     *     @type string $reserve
     *           reserve defines the coin reserve in base coin.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Coin\V1\GPBMetadata\Coin::initOnce();
        parent::__construct($data);
    }

    /**
     * volume defines the coin supply.
     *
     * Generated from protobuf field <code>string volume = 1 [json_name = "volume", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @return string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * volume defines the coin supply.
     *
     * Generated from protobuf field <code>string volume = 1 [json_name = "volume", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setVolume($var)
    {
        GPBUtil::checkString($var, True);
        $this->volume = $var;

        return $this;
    }

    /**
     * reserve defines the coin reserve in base coin.
     *
     * Generated from protobuf field <code>string reserve = 2 [json_name = "reserve", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @return string
     */
    public function getReserve()
    {
        return $this->reserve;
    }

    /**
     * reserve defines the coin reserve in base coin.
     *
     * Generated from protobuf field <code>string reserve = 2 [json_name = "reserve", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setReserve($var)
    {
        GPBUtil::checkString($var, True);
        $this->reserve = $var;

        return $this;
    }

}
