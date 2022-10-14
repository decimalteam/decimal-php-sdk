<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/types/evidence.proto

namespace Tendermint\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LightClientAttackEvidence contains evidence of a set of validators attempting to mislead a light client.
 *
 * Generated from protobuf message <code>tendermint.types.LightClientAttackEvidence</code>
 */
class LightClientAttackEvidence extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.tendermint.types.LightBlock conflicting_block = 1 [json_name = "conflictingBlock"];</code>
     */
    protected $conflicting_block = null;
    /**
     * Generated from protobuf field <code>int64 common_height = 2 [json_name = "commonHeight"];</code>
     */
    protected $common_height = 0;
    /**
     * Generated from protobuf field <code>repeated .tendermint.types.Validator byzantine_validators = 3 [json_name = "byzantineValidators"];</code>
     */
    private $byzantine_validators;
    /**
     * Generated from protobuf field <code>int64 total_voting_power = 4 [json_name = "totalVotingPower"];</code>
     */
    protected $total_voting_power = 0;
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
     *     @type \Tendermint\Types\LightBlock $conflicting_block
     *     @type int|string $common_height
     *     @type array<\Tendermint\Types\Validator>|\Google\Protobuf\Internal\RepeatedField $byzantine_validators
     *     @type int|string $total_voting_power
     *     @type \Google\Protobuf\Timestamp $timestamp
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Types\GPBMetadata\Evidence::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.LightBlock conflicting_block = 1 [json_name = "conflictingBlock"];</code>
     * @return \Tendermint\Types\LightBlock|null
     */
    public function getConflictingBlock()
    {
        return $this->conflicting_block;
    }

    public function hasConflictingBlock()
    {
        return isset($this->conflicting_block);
    }

    public function clearConflictingBlock()
    {
        unset($this->conflicting_block);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.LightBlock conflicting_block = 1 [json_name = "conflictingBlock"];</code>
     * @param \Tendermint\Types\LightBlock $var
     * @return $this
     */
    public function setConflictingBlock($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Types\LightBlock::class);
        $this->conflicting_block = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 common_height = 2 [json_name = "commonHeight"];</code>
     * @return int|string
     */
    public function getCommonHeight()
    {
        return $this->common_height;
    }

    /**
     * Generated from protobuf field <code>int64 common_height = 2 [json_name = "commonHeight"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommonHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->common_height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .tendermint.types.Validator byzantine_validators = 3 [json_name = "byzantineValidators"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getByzantineValidators()
    {
        return $this->byzantine_validators;
    }

    /**
     * Generated from protobuf field <code>repeated .tendermint.types.Validator byzantine_validators = 3 [json_name = "byzantineValidators"];</code>
     * @param array<\Tendermint\Types\Validator>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setByzantineValidators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tendermint\Types\Validator::class);
        $this->byzantine_validators = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_voting_power = 4 [json_name = "totalVotingPower"];</code>
     * @return int|string
     */
    public function getTotalVotingPower()
    {
        return $this->total_voting_power;
    }

    /**
     * Generated from protobuf field <code>int64 total_voting_power = 4 [json_name = "totalVotingPower"];</code>
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

