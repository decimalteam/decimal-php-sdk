<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.abci.Evidence</code>
 */
class Evidence extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.tendermint.abci.EvidenceType type = 1 [json_name = "type"];</code>
     */
    protected $type = 0;
    /**
     * The offending validator
     *
     * Generated from protobuf field <code>.tendermint.abci.Validator validator = 2 [json_name = "validator", (.gogoproto.nullable) = false];</code>
     */
    protected $validator = null;
    /**
     * The height when the offense occurred
     *
     * Generated from protobuf field <code>int64 height = 3 [json_name = "height"];</code>
     */
    protected $height = 0;
    /**
     * The corresponding time where the offense occurred
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 4 [json_name = "time", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     */
    protected $time = null;
    /**
     * Total voting power of the validator set in case the ABCI application does
     * not store historical validators.
     * https://github.com/tendermint/tendermint/issues/4581
     *
     * Generated from protobuf field <code>int64 total_voting_power = 5 [json_name = "totalVotingPower"];</code>
     */
    protected $total_voting_power = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type \Tendermint\Abci\Validator $validator
     *           The offending validator
     *     @type int|string $height
     *           The height when the offense occurred
     *     @type \Google\Protobuf\Timestamp $time
     *           The corresponding time where the offense occurred
     *     @type int|string $total_voting_power
     *           Total voting power of the validator set in case the ABCI application does
     *           not store historical validators.
     *           https://github.com/tendermint/tendermint/issues/4581
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Abci\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.tendermint.abci.EvidenceType type = 1 [json_name = "type"];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.tendermint.abci.EvidenceType type = 1 [json_name = "type"];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Tendermint\Abci\EvidenceType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The offending validator
     *
     * Generated from protobuf field <code>.tendermint.abci.Validator validator = 2 [json_name = "validator", (.gogoproto.nullable) = false];</code>
     * @return \Tendermint\Abci\Validator|null
     */
    public function getValidator()
    {
        return $this->validator;
    }

    public function hasValidator()
    {
        return isset($this->validator);
    }

    public function clearValidator()
    {
        unset($this->validator);
    }

    /**
     * The offending validator
     *
     * Generated from protobuf field <code>.tendermint.abci.Validator validator = 2 [json_name = "validator", (.gogoproto.nullable) = false];</code>
     * @param \Tendermint\Abci\Validator $var
     * @return $this
     */
    public function setValidator($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Abci\Validator::class);
        $this->validator = $var;

        return $this;
    }

    /**
     * The height when the offense occurred
     *
     * Generated from protobuf field <code>int64 height = 3 [json_name = "height"];</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * The height when the offense occurred
     *
     * Generated from protobuf field <code>int64 height = 3 [json_name = "height"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->height = $var;

        return $this;
    }

    /**
     * The corresponding time where the offense occurred
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 4 [json_name = "time", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTime()
    {
        return $this->time;
    }

    public function hasTime()
    {
        return isset($this->time);
    }

    public function clearTime()
    {
        unset($this->time);
    }

    /**
     * The corresponding time where the offense occurred
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 4 [json_name = "time", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

        return $this;
    }

    /**
     * Total voting power of the validator set in case the ABCI application does
     * not store historical validators.
     * https://github.com/tendermint/tendermint/issues/4581
     *
     * Generated from protobuf field <code>int64 total_voting_power = 5 [json_name = "totalVotingPower"];</code>
     * @return int|string
     */
    public function getTotalVotingPower()
    {
        return $this->total_voting_power;
    }

    /**
     * Total voting power of the validator set in case the ABCI application does
     * not store historical validators.
     * https://github.com/tendermint/tendermint/issues/4581
     *
     * Generated from protobuf field <code>int64 total_voting_power = 5 [json_name = "totalVotingPower"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalVotingPower($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_voting_power = $var;

        return $this;
    }

}
