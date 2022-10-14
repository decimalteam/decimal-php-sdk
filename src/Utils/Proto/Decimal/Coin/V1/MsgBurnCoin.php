<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/coin/v1/tx.proto

namespace Decimal\Coin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgBurnCoin defines a SDK message for burning a coin.
 *
 * Generated from protobuf message <code>decimal.coin.v1.MsgBurnCoin</code>
 */
class MsgBurnCoin extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sender = 1 [json_name = "sender", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $sender = '';
    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin coin = 2 [json_name = "coin", (.gogoproto.nullable) = false];</code>
     */
    protected $coin = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sender
     *     @type \Cosmos\Base\V1beta1\Coin $coin
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
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin coin = 2 [json_name = "coin", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Base\V1beta1\Coin|null
     */
    public function getCoin()
    {
        return $this->coin;
    }

    public function hasCoin()
    {
        return isset($this->coin);
    }

    public function clearCoin()
    {
        unset($this->coin);
    }

    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin coin = 2 [json_name = "coin", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Base\V1beta1\Coin $var
     * @return $this
     */
    public function setCoin($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\V1beta1\Coin::class);
        $this->coin = $var;

        return $this;
    }

}
