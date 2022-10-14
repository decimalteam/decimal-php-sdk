<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/types/evidence.proto

namespace Tendermint\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DuplicateVoteEvidence contains evidence of a validator signed two conflicting votes.
 *
 * Generated from protobuf message <code>tendermint.types.DuplicateVoteEvidence</code>
 */
class DuplicateVoteEvidence extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.tendermint.types.Vote vote_a = 1 [json_name = "voteA"];</code>
     */
    protected $vote_a = null;
    /**
     * Generated from protobuf field <code>.tendermint.types.Vote vote_b = 2 [json_name = "voteB"];</code>
     */
    protected $vote_b = null;
    /**
     * Generated from protobuf field <code>int64 total_voting_power = 3 [json_name = "totalVotingPower"];</code>
     */
    protected $total_voting_power = 0;
    /**
     * Generated from protobuf field <code>int64 validator_power = 4 [json_name = "validatorPower"];</code>
     */
    protected $validator_power = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 5 [json_name = "timestamp", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     */
    protected $timestamp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tendermint\Types\Vote $vote_a
     *     @type \Tendermint\Types\Vote $vote_b
     *     @type int|string $total_voting_power
     *     @type int|string $validator_power
     *     @type \Google\Protobuf\Timestamp $timestamp
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Types\GPBMetadata\Evidence::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.Vote vote_a = 1 [json_name = "voteA"];</code>
     * @return \Tendermint\Types\Vote|null
     */
    public function getVoteA()
    {
        return $this->vote_a;
    }

    public function hasVoteA()
    {
        return isset($this->vote_a);
    }

    public function clearVoteA()
    {
        unset($this->vote_a);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.Vote vote_a = 1 [json_name = "voteA"];</code>
     * @param \Tendermint\Types\Vote $var
     * @return $this
     */
    public function setVoteA($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Types\Vote::class);
        $this->vote_a = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.Vote vote_b = 2 [json_name = "voteB"];</code>
     * @return \Tendermint\Types\Vote|null
     */
    public function getVoteB()
    {
        return $this->vote_b;
    }

    public function hasVoteB()
    {
        return isset($this->vote_b);
    }

    public function clearVoteB()
    {
        unset($this->vote_b);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.Vote vote_b = 2 [json_name = "voteB"];</code>
     * @param \Tendermint\Types\Vote $var
     * @return $this
     */
    public function setVoteB($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Types\Vote::class);
        $this->vote_b = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_voting_power = 3 [json_name = "totalVotingPower"];</code>
     * @return int|string
     */
    public function getTotalVotingPower()
    {
        return $this->total_voting_power;
    }

    /**
     * Generated from protobuf field <code>int64 total_voting_power = 3 [json_name = "totalVotingPower"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalVotingPower($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_voting_power = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 validator_power = 4 [json_name = "validatorPower"];</code>
     * @return int|string
     */
    public function getValidatorPower()
    {
        return $this->validator_power;
    }

    /**
     * Generated from protobuf field <code>int64 validator_power = 4 [json_name = "validatorPower"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setValidatorPower($var)
    {
        GPBUtil::checkInt64($var);
        $this->validator_power = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 5 [json_name = "timestamp", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 5 [json_name = "timestamp", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

}
