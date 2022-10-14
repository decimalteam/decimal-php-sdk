<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/bank/v1beta1/genesis.proto

namespace Cosmos\Bank\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Balance defines an account address and balance pair used in the bank module's
 * genesis state.
 *
 * Generated from protobuf message <code>cosmos.bank.v1beta1.Balance</code>
 */
class Balance extends \Google\Protobuf\Internal\Message
{
    /**
     * address is the address of the balance holder.
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     */
    protected $address = '';
    /**
     * coins defines the different coins this balance holds.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin coins = 2 [json_name = "coins", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     */
    private $coins;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           address is the address of the balance holder.
     *     @type array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $coins
     *           coins defines the different coins this balance holds.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Bank\V1beta1\GPBMetadata\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * address is the address of the balance holder.
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * address is the address of the balance holder.
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * coins defines the different coins this balance holds.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin coins = 2 [json_name = "coins", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCoins()
    {
        return $this->coins;
    }

    /**
     * coins defines the different coins this balance holds.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin coins = 2 [json_name = "coins", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
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
