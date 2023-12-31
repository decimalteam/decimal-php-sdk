<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/coin/v1/tx.proto

namespace Decimal\Coin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgBuyCoin defines a SDK message for buying a coin.
 *
 * Generated from protobuf message <code>decimal.coin.v1.MsgBuyCoin</code>
 */
class MsgBuyCoin extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sender = 1 [json_name = "sender", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $sender = '';
    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin coin_to_buy = 2 [json_name = "coinToBuy", (.gogoproto.nullable) = false];</code>
     */
    protected $coin_to_buy = null;
    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin max_coin_to_sell = 3 [json_name = "maxCoinToSell", (.gogoproto.nullable) = false];</code>
     */
    protected $max_coin_to_sell = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sender
     *     @type \Cosmos\Base\V1beta1\Coin $coin_to_buy
     *     @type \Cosmos\Base\V1beta1\Coin $max_coin_to_sell
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Coin\V1\GPBMetadata\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sender = 1 [json_name = "sender", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Generated from protobuf field <code>string sender = 1 [json_name = "sender", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setSender($var)
    {
        GPBUtil::checkString($var, True);
        $this->sender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin coin_to_buy = 2 [json_name = "coinToBuy", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Base\V1beta1\Coin|null
     */
    public function getCoinToBuy()
    {
        return $this->coin_to_buy;
    }

    public function hasCoinToBuy()
    {
        return isset($this->coin_to_buy);
    }

    public function clearCoinToBuy()
    {
        unset($this->coin_to_buy);
    }

    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin coin_to_buy = 2 [json_name = "coinToBuy", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Base\V1beta1\Coin $var
     * @return $this
     */
    public function setCoinToBuy($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\V1beta1\Coin::class);
        $this->coin_to_buy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin max_coin_to_sell = 3 [json_name = "maxCoinToSell", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Base\V1beta1\Coin|null
     */
    public function getMaxCoinToSell()
    {
        return $this->max_coin_to_sell;
    }

    public function hasMaxCoinToSell()
    {
        return isset($this->max_coin_to_sell);
    }

    public function clearMaxCoinToSell()
    {
        unset($this->max_coin_to_sell);
    }

    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin max_coin_to_sell = 3 [json_name = "maxCoinToSell", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Base\V1beta1\Coin $var
     * @return $this
     */
    public function setMaxCoinToSell($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\V1beta1\Coin::class);
        $this->max_coin_to_sell = $var;

        return $this;
    }

}

