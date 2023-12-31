<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/multisig/v1/genesis.proto

namespace Decimal\Multisig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisTransaction defines old multisig transaction (only send coins).
 *
 * Generated from protobuf message <code>decimal.multisig.v1.GenesisTransaction</code>
 */
class GenesisTransaction extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string wallet = 2 [json_name = "wallet", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $wallet = '';
    /**
     * Generated from protobuf field <code>string receiver = 3 [json_name = "receiver", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $receiver = '';
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin coins = 4 [json_name = "coins", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     */
    private $coins;
    /**
     * Generated from protobuf field <code>repeated string signers = 5 [json_name = "signers"];</code>
     */
    private $signers;
    /**
     * Generated from protobuf field <code>int64 created_at = 6 [json_name = "createdAt"];</code>
     */
    protected $created_at = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $wallet
     *     @type string $receiver
     *     @type array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $coins
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $signers
     *     @type int|string $created_at
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Multisig\V1\GPBMetadata\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

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
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin coins = 4 [json_name = "coins", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCoins()
    {
        return $this->coins;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin coins = 4 [json_name = "coins", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @param array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCoins($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\Coin::class);
        $this->coins = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string signers = 5 [json_name = "signers"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSigners()
    {
        return $this->signers;
    }

    /**
     * Generated from protobuf field <code>repeated string signers = 5 [json_name = "signers"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSigners($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->signers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 created_at = 6 [json_name = "createdAt"];</code>
     * @return int|string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>int64 created_at = 6 [json_name = "createdAt"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->created_at = $var;

        return $this;
    }

}

