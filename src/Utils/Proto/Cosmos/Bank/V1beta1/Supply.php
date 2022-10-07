<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/bank/v1beta1/bank.proto

namespace Cosmos\Bank\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Supply represents a struct that passively keeps track of the total supply
 * amounts in the network.
 * This message is deprecated now that supply is indexed by denom.
 *
 * Generated from protobuf message <code>cosmos.bank.v1beta1.Supply</code>
 */
class Supply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin total = 1 [json_name = "total", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     */
    private $total;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Base\V1beta1\Coin[]|\Google\Protobuf\Internal\RepeatedField $total
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Bank\V1Beta1\Bank::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin total = 1 [json_name = "total", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin total = 1 [json_name = "total", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @param \Cosmos\Base\V1beta1\Coin[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTotal($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\Coin::class);
        $this->total = $arr;

        return $this;
    }

}

