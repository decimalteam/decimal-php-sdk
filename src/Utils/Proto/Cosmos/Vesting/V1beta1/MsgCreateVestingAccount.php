<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/vesting/v1beta1/tx.proto

namespace Cosmos\Vesting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgCreateVestingAccount defines a message that enables creating a vesting
 * account.
 *
 * Generated from protobuf message <code>cosmos.vesting.v1beta1.MsgCreateVestingAccount</code>
 */
class MsgCreateVestingAccount extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>int64 end_time = 4 [json_name = "endTime", (.gogoproto.moretags) = "yaml:\"end_time\""];</code>
     */
    protected $end_time = 0;
    /**
     * Generated from protobuf field <code>bool delayed = 5 [json_name = "delayed"];</code>
     */
    protected $delayed = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $from_address
     *     @type string $to_address
     *     @type array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $amount
     *     @type int|string $end_time
     *     @type bool $delayed
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Vesting\V1beta1\GPBMetadata\Tx::initOnce();
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
     * @param array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAmount($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\Coin::class);
        $this->amount = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 end_time = 4 [json_name = "endTime", (.gogoproto.moretags) = "yaml:\"end_time\""];</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Generated from protobuf field <code>int64 end_time = 4 [json_name = "endTime", (.gogoproto.moretags) = "yaml:\"end_time\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool delayed = 5 [json_name = "delayed"];</code>
     * @return bool
     */
    public function getDelayed()
    {
        return $this->delayed;
    }

    /**
     * Generated from protobuf field <code>bool delayed = 5 [json_name = "delayed"];</code>
     * @param bool $var
     * @return $this
     */
    public function setDelayed($var)
    {
        GPBUtil::checkBool($var);
        $this->delayed = $var;

        return $this;
    }

}
