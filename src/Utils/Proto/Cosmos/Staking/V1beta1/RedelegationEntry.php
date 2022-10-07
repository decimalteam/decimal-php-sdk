<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/staking.proto

namespace Cosmos\Staking\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RedelegationEntry defines a redelegation object with relevant metadata.
 *
 * Generated from protobuf message <code>cosmos.staking.v1beta1.RedelegationEntry</code>
 */
class RedelegationEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * creation_height  defines the height which the redelegation took place.
     *
     * Generated from protobuf field <code>int64 creation_height = 1 [json_name = "creationHeight"];</code>
     */
    protected $creation_height = 0;
    /**
     * completion_time defines the unix time for redelegation completion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp completion_time = 2 [json_name = "completionTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     */
    protected $completion_time = null;
    /**
     * initial_balance defines the initial balance when redelegation started.
     *
     * Generated from protobuf field <code>string initial_balance = 3 [json_name = "initialBalance", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     */
    protected $initial_balance = '';
    /**
     * shares_dst is the amount of destination-validator shares created by redelegation.
     *
     * Generated from protobuf field <code>string shares_dst = 4 [json_name = "sharesDst", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.cosmos_proto.scalar) = "cosmos.Dec"];</code>
     */
    protected $shares_dst = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $creation_height
     *           creation_height  defines the height which the redelegation took place.
     *     @type \Google\Protobuf\Timestamp $completion_time
     *           completion_time defines the unix time for redelegation completion.
     *     @type string $initial_balance
     *           initial_balance defines the initial balance when redelegation started.
     *     @type string $shares_dst
     *           shares_dst is the amount of destination-validator shares created by redelegation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Staking\V1Beta1\Staking::initOnce();
        parent::__construct($data);
    }

    /**
     * creation_height  defines the height which the redelegation took place.
     *
     * Generated from protobuf field <code>int64 creation_height = 1 [json_name = "creationHeight"];</code>
     * @return int|string
     */
    public function getCreationHeight()
    {
        return $this->creation_height;
    }

    /**
     * creation_height  defines the height which the redelegation took place.
     *
     * Generated from protobuf field <code>int64 creation_height = 1 [json_name = "creationHeight"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_height = $var;

        return $this;
    }

    /**
     * completion_time defines the unix time for redelegation completion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp completion_time = 2 [json_name = "completionTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCompletionTime()
    {
        return $this->completion_time;
    }

    public function hasCompletionTime()
    {
        return isset($this->completion_time);
    }

    public function clearCompletionTime()
    {
        unset($this->completion_time);
    }

    /**
     * completion_time defines the unix time for redelegation completion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp completion_time = 2 [json_name = "completionTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCompletionTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->completion_time = $var;

        return $this;
    }

    /**
     * initial_balance defines the initial balance when redelegation started.
     *
     * Generated from protobuf field <code>string initial_balance = 3 [json_name = "initialBalance", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @return string
     */
    public function getInitialBalance()
    {
        return $this->initial_balance;
    }

    /**
     * initial_balance defines the initial balance when redelegation started.
     *
     * Generated from protobuf field <code>string initial_balance = 3 [json_name = "initialBalance", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setInitialBalance($var)
    {
        GPBUtil::checkString($var, True);
        $this->initial_balance = $var;

        return $this;
    }

    /**
     * shares_dst is the amount of destination-validator shares created by redelegation.
     *
     * Generated from protobuf field <code>string shares_dst = 4 [json_name = "sharesDst", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.cosmos_proto.scalar) = "cosmos.Dec"];</code>
     * @return string
     */
    public function getSharesDst()
    {
        return $this->shares_dst;
    }

    /**
     * shares_dst is the amount of destination-validator shares created by redelegation.
     *
     * Generated from protobuf field <code>string shares_dst = 4 [json_name = "sharesDst", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.cosmos_proto.scalar) = "cosmos.Dec"];</code>
     * @param string $var
     * @return $this
     */
    public function setSharesDst($var)
    {
        GPBUtil::checkString($var, True);
        $this->shares_dst = $var;

        return $this;
    }

}

