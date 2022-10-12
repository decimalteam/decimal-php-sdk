<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/multisig/v1/events.proto

namespace Decimal\Multisig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventCreateTransaction defines event emitted when new multisig transaction is created.
 *
 * Generated from protobuf message <code>decimal.multisig.v1.EventCreateTransaction</code>
 */
class EventCreateTransaction extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sender = 1 [json_name = "sender", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $sender = '';
    /**
     * Generated from protobuf field <code>string wallet = 2 [json_name = "wallet", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $wallet = '';
    /**
     * Generated from protobuf field <code>string receiver = 3 [json_name = "receiver", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $receiver = '';
    /**
     * Generated from protobuf field <code>string coins = 4 [json_name = "coins"];</code>
     */
    protected $coins = '';
    /**
     * Generated from protobuf field <code>string transaction = 5 [json_name = "transaction"];</code>
     */
    protected $transaction = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sender
     *     @type string $wallet
     *     @type string $receiver
     *     @type string $coins
     *     @type string $transaction
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Multisig\V1\Events::initOnce();
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
     * Generated from protobuf field <code>string wallet = 2 [json_name = "wallet", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * Generated from protobuf field <code>string wallet = 2 [json_name = "wallet", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setWallet($var)
    {
        GPBUtil::checkString($var, True);
        $this->wallet = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string receiver = 3 [json_name = "receiver", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Generated from protobuf field <code>string receiver = 3 [json_name = "receiver", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setReceiver($var)
    {
        GPBUtil::checkString($var, True);
        $this->receiver = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string coins = 4 [json_name = "coins"];</code>
     * @return string
     */
    public function getCoins()
    {
        return $this->coins;
    }

    /**
     * Generated from protobuf field <code>string coins = 4 [json_name = "coins"];</code>
     * @param string $var
     * @return $this
     */
    public function setCoins($var)
    {
        GPBUtil::checkString($var, True);
        $this->coins = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string transaction = 5 [json_name = "transaction"];</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Generated from protobuf field <code>string transaction = 5 [json_name = "transaction"];</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, True);
        $this->transaction = $var;

        return $this;
    }

}

