<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/coin/v1/events.proto

namespace Decimal\Coin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventRedeemCheck defines event emitted when a check is redeemed.
 *
 * Generated from protobuf message <code>decimal.coin.v1.EventRedeemCheck</code>
 */
class EventRedeemCheck extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sender = 1 [json_name = "sender", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $sender = '';
    /**
     * Generated from protobuf field <code>string issuer = 2 [json_name = "issuer", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $issuer = '';
    /**
     * Generated from protobuf field <code>string coin = 3 [json_name = "coin"];</code>
     */
    protected $coin = '';
    /**
     * Generated from protobuf field <code>string nonce = 4 [json_name = "nonce"];</code>
     */
    protected $nonce = '';
    /**
     * Generated from protobuf field <code>string due_block = 5 [json_name = "dueBlock"];</code>
     */
    protected $due_block = '';
    /**
     * Generated from protobuf field <code>string commission_redeem_check = 6 [json_name = "commissionRedeemCheck"];</code>
     */
    protected $commission_redeem_check = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sender
     *     @type string $issuer
     *     @type string $coin
     *     @type string $nonce
     *     @type string $due_block
     *     @type string $commission_redeem_check
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Coin\V1\Events::initOnce();
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
     * Generated from protobuf field <code>string issuer = 2 [json_name = "issuer", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Generated from protobuf field <code>string issuer = 2 [json_name = "issuer", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setIssuer($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string coin = 3 [json_name = "coin"];</code>
     * @return string
     */
    public function getCoin()
    {
        return $this->coin;
    }

    /**
     * Generated from protobuf field <code>string coin = 3 [json_name = "coin"];</code>
     * @param string $var
     * @return $this
     */
    public function setCoin($var)
    {
        GPBUtil::checkString($var, True);
        $this->coin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nonce = 4 [json_name = "nonce"];</code>
     * @return string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * Generated from protobuf field <code>string nonce = 4 [json_name = "nonce"];</code>
     * @param string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkString($var, True);
        $this->nonce = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string due_block = 5 [json_name = "dueBlock"];</code>
     * @return string
     */
    public function getDueBlock()
    {
        return $this->due_block;
    }

    /**
     * Generated from protobuf field <code>string due_block = 5 [json_name = "dueBlock"];</code>
     * @param string $var
     * @return $this
     */
    public function setDueBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->due_block = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string commission_redeem_check = 6 [json_name = "commissionRedeemCheck"];</code>
     * @return string
     */
    public function getCommissionRedeemCheck()
    {
        return $this->commission_redeem_check;
    }

    /**
     * Generated from protobuf field <code>string commission_redeem_check = 6 [json_name = "commissionRedeemCheck"];</code>
     * @param string $var
     * @return $this
     */
    public function setCommissionRedeemCheck($var)
    {
        GPBUtil::checkString($var, True);
        $this->commission_redeem_check = $var;

        return $this;
    }

}

