<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/vesting/v1beta1/tx.proto

namespace Cosmos\Vesting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgCreatePermanentLockedAccount defines a message that enables creating a permanent
 * locked account.
 * Since: cosmos-sdk 0.46
 *
 * Generated from protobuf message <code>cosmos.vesting.v1beta1.MsgCreatePermanentLockedAccount</code>
 */
class MsgCreatePermanentLockedAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string from_address = 1 [json_name = "fromAddress", (.gogoproto.moretags) = "yaml:\"from_address\""];</code>
     */
    protected $from_address = '';
    /**
     * Generated from protobuf field <code>string to_address = 2 [json_name = "toAddress", (.gogoproto.moretags) = "yaml:\"to_address\""];</code>
     */
    protected $to_address = '';
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin amount = 3 [json_name = "amount", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     */
    private $amount;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $from_address
     *     @type string $to_address
     *     @type \Cosmos\Base\V1beta1\Coin[]|\Google\Protobuf\Internal\RepeatedField $amount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Vesting\V1Beta1\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string from_address = 1 [json_name = "fromAddress", (.gogoproto.moretags) = "yaml:\"from_address\""];</code>
     * @return string
     */
    public function getFromAddress()
    {
        return $this->from_address;
    }

    /**
     * Generated from protobuf field <code>string from_address = 1 [json_name = "fromAddress", (.gogoproto.moretags) = "yaml:\"from_address\""];</code>
     * @param string $var
     * @return $this
     */
    public function setFromAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->from_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string to_address = 2 [json_name = "toAddress", (.gogoproto.moretags) = "yaml:\"to_address\""];</code>
     * @return string
     */
    public function getToAddress()
    {
        return $this->to_address;
    }

    /**
     * Generated from protobuf field <code>string to_address = 2 [json_name = "toAddress", (.gogoproto.moretags) = "yaml:\"to_address\""];</code>
     * @param string $var
     * @return $this
     */
    public function setToAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->to_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin amount = 3 [json_name = "amount", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin amount = 3 [json_name = "amount", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @param \Cosmos\Base\V1beta1\Coin[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAmount($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\Coin::class);
        $this->amount = $arr;

        return $this;
    }

}

