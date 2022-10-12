<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/coin/v1/tx.proto

namespace Decimal\Coin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgCreateCoin defines a SDK message for creating a new coin.
 *
 * Generated from protobuf message <code>decimal.coin.v1.MsgCreateCoin</code>
 */
class MsgCreateCoin extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sender = 1 [json_name = "sender", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $sender = '';
    /**
     * Generated from protobuf field <code>string denom = 2 [json_name = "denom"];</code>
     */
    protected $denom = '';
    /**
     * Generated from protobuf field <code>string title = 3 [json_name = "title"];</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>uint32 crr = 4 [json_name = "crr", (.gogoproto.customname) = "CRR"];</code>
     */
    protected $crr = 0;
    /**
     * Generated from protobuf field <code>string initial_volume = 5 [json_name = "initialVolume", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     */
    protected $initial_volume = '';
    /**
     * Generated from protobuf field <code>string initial_reserve = 6 [json_name = "initialReserve", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     */
    protected $initial_reserve = '';
    /**
     * Generated from protobuf field <code>string limit_volume = 7 [json_name = "limitVolume", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     */
    protected $limit_volume = '';
    /**
     * Generated from protobuf field <code>string identity = 8 [json_name = "identity"];</code>
     */
    protected $identity = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sender
     *     @type string $denom
     *     @type string $title
     *     @type int $crr
     *     @type string $initial_volume
     *     @type string $initial_reserve
     *     @type string $limit_volume
     *     @type string $identity
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Coin\V1\Tx::initOnce();
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
     * Generated from protobuf field <code>string denom = 2 [json_name = "denom"];</code>
     * @return string
     */
    public function getDenom()
    {
        return $this->denom;
    }

    /**
     * Generated from protobuf field <code>string denom = 2 [json_name = "denom"];</code>
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
     * Generated from protobuf field <code>string title = 3 [json_name = "title"];</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 3 [json_name = "title"];</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 crr = 4 [json_name = "crr", (.gogoproto.customname) = "CRR"];</code>
     * @return int
     */
    public function getCrr()
    {
        return $this->crr;
    }

    /**
     * Generated from protobuf field <code>uint32 crr = 4 [json_name = "crr", (.gogoproto.customname) = "CRR"];</code>
     * @param int $var
     * @return $this
     */
    public function setCrr($var)
    {
        GPBUtil::checkUint32($var);
        $this->crr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string initial_volume = 5 [json_name = "initialVolume", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @return string
     */
    public function getInitialVolume()
    {
        return $this->initial_volume;
    }

    /**
     * Generated from protobuf field <code>string initial_volume = 5 [json_name = "initialVolume", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setInitialVolume($var)
    {
        GPBUtil::checkString($var, True);
        $this->initial_volume = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string initial_reserve = 6 [json_name = "initialReserve", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @return string
     */
    public function getInitialReserve()
    {
        return $this->initial_reserve;
    }

    /**
     * Generated from protobuf field <code>string initial_reserve = 6 [json_name = "initialReserve", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setInitialReserve($var)
    {
        GPBUtil::checkString($var, True);
        $this->initial_reserve = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string limit_volume = 7 [json_name = "limitVolume", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @return string
     */
    public function getLimitVolume()
    {
        return $this->limit_volume;
    }

    /**
     * Generated from protobuf field <code>string limit_volume = 7 [json_name = "limitVolume", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setLimitVolume($var)
    {
        GPBUtil::checkString($var, True);
        $this->limit_volume = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string identity = 8 [json_name = "identity"];</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Generated from protobuf field <code>string identity = 8 [json_name = "identity"];</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

}

