<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/legacy/v1/events.proto

namespace Decimal\Legacy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventReturnLegacyCoins defines event emitted when the coins are returned to the actual owner.
 *
 * Generated from protobuf message <code>decimal.legacy.v1.EventReturnLegacyCoins</code>
 */
class EventReturnLegacyCoins extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string legacy_owner = 1 [json_name = "legacyOwner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $legacy_owner = '';
    /**
     * Generated from protobuf field <code>string owner = 2 [json_name = "owner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $owner = '';
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin coins = 3 [json_name = "coins", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     */
    private $coins;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $legacy_owner
     *     @type string $owner
     *     @type array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $coins
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Legacy\V1\GPBMetadata\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string legacy_owner = 1 [json_name = "legacyOwner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getLegacyOwner()
    {
        return $this->legacy_owner;
    }

    /**
     * Generated from protobuf field <code>string legacy_owner = 1 [json_name = "legacyOwner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setLegacyOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->legacy_owner = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string owner = 2 [json_name = "owner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Generated from protobuf field <code>string owner = 2 [json_name = "owner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin coins = 3 [json_name = "coins", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCoins()
    {
        return $this->coins;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin coins = 3 [json_name = "coins", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @param array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCoins($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\Coin::class);
        $this->coins = $arr;

        return $this;
    }

}

