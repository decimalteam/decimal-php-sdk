<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.abci.ResponseInitChain</code>
 */
class ResponseInitChain extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.tendermint.abci.ConsensusParams consensus_params = 1 [json_name = "consensusParams"];</code>
     */
    protected $consensus_params = null;
    /**
     * Generated from protobuf field <code>repeated .tendermint.abci.ValidatorUpdate validators = 2 [json_name = "validators", (.gogoproto.nullable) = false];</code>
     */
    private $validators;
    /**
     * Generated from protobuf field <code>bytes app_hash = 3 [json_name = "appHash"];</code>
     */
    protected $app_hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tendermint\Abci\ConsensusParams $consensus_params
     *     @type array<\Tendermint\Abci\ValidatorUpdate>|\Google\Protobuf\Internal\RepeatedField $validators
     *     @type string $app_hash
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Abci\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.tendermint.abci.ConsensusParams consensus_params = 1 [json_name = "consensusParams"];</code>
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
     * Generated from protobuf field <code>.tendermint.abci.ConsensusParams consensus_params = 1 [json_name = "consensusParams"];</code>
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
     * Generated from protobuf field <code>repeated .tendermint.abci.ValidatorUpdate validators = 2 [json_name = "validators", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidators()
    {
        return $this->validators;
    }

    /**
     * Generated from protobuf field <code>repeated .tendermint.abci.ValidatorUpdate validators = 2 [json_name = "validators", (.gogoproto.nullable) = false];</code>
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
     * Generated from protobuf field <code>bytes app_hash = 3 [json_name = "appHash"];</code>
     * @return string
     */
    public function getAppHash()
    {
        return $this->app_hash;
    }

    /**
     * Generated from protobuf field <code>bytes app_hash = 3 [json_name = "appHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setAppHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->app_hash = $var;

        return $this;
    }

}

