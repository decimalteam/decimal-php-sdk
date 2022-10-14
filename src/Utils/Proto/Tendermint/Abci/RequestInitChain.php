<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.abci.RequestInitChain</code>
 */
class RequestInitChain extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1 [json_name = "time", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     */
    protected $time = null;
    /**
     * Generated from protobuf field <code>string chain_id = 2 [json_name = "chainId"];</code>
     */
    protected $chain_id = '';
    /**
     * Generated from protobuf field <code>.tendermint.abci.ConsensusParams consensus_params = 3 [json_name = "consensusParams"];</code>
     */
    protected $consensus_params = null;
    /**
     * Generated from protobuf field <code>repeated .tendermint.abci.ValidatorUpdate validators = 4 [json_name = "validators", (.gogoproto.nullable) = false];</code>
     */
    private $validators;
    /**
     * Generated from protobuf field <code>bytes app_state_bytes = 5 [json_name = "appStateBytes"];</code>
     */
    protected $app_state_bytes = '';
    /**
     * Generated from protobuf field <code>int64 initial_height = 6 [json_name = "initialHeight"];</code>
     */
    protected $initial_height = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $time
     *     @type string $chain_id
     *     @type \Tendermint\Abci\ConsensusParams $consensus_params
     *     @type array<\Tendermint\Abci\ValidatorUpdate>|\Google\Protobuf\Internal\RepeatedField $validators
     *     @type string $app_state_bytes
     *     @type int|string $initial_height
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Abci\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1 [json_name = "time", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1 [json_name = "time", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
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
     * Generated from protobuf field <code>string chain_id = 2 [json_name = "chainId"];</code>
     * @return string
     */
    public function getChainId()
    {
        return $this->chain_id;
    }

    /**
     * Generated from protobuf field <code>string chain_id = 2 [json_name = "chainId"];</code>
     * @param string $var
     * @return $this
     */
    public function setChainId($var)
    {
        GPBUtil::checkString($var, True);
        $this->chain_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.tendermint.abci.ConsensusParams consensus_params = 3 [json_name = "consensusParams"];</code>
     * @return \Tendermint\Abci\ConsensusParams|null
     */
    public function getConsensusParams()
    {
        return $this->consensus_params;
    }

    public function hasConsensusParams()
    {
        return isset($this->consensus_params);
    }

    public function clearConsensusParams()
    {
        unset($this->consensus_params);
    }

    /**
     * Generated from protobuf field <code>.tendermint.abci.ConsensusParams consensus_params = 3 [json_name = "consensusParams"];</code>
     * @param \Tendermint\Abci\ConsensusParams $var
     * @return $this
     */
    public function setConsensusParams($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Abci\ConsensusParams::class);
        $this->consensus_params = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .tendermint.abci.ValidatorUpdate validators = 4 [json_name = "validators", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidators()
    {
        return $this->validators;
    }

    /**
     * Generated from protobuf field <code>repeated .tendermint.abci.ValidatorUpdate validators = 4 [json_name = "validators", (.gogoproto.nullable) = false];</code>
     * @param array<\Tendermint\Abci\ValidatorUpdate>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tendermint\Abci\ValidatorUpdate::class);
        $this->validators = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes app_state_bytes = 5 [json_name = "appStateBytes"];</code>
     * @return string
     */
    public function getAppStateBytes()
    {
        return $this->app_state_bytes;
    }

    /**
     * Generated from protobuf field <code>bytes app_state_bytes = 5 [json_name = "appStateBytes"];</code>
     * @param string $var
     * @return $this
     */
    public function setAppStateBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->app_state_bytes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 initial_height = 6 [json_name = "initialHeight"];</code>
     * @return int|string
     */
    public function getInitialHeight()
    {
        return $this->initial_height;
    }

    /**
     * Generated from protobuf field <code>int64 initial_height = 6 [json_name = "initialHeight"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setInitialHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->initial_height = $var;

        return $this;
    }

}
