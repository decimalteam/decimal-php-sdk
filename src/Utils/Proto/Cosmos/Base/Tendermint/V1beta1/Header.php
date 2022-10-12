<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/tendermint/v1beta1/types.proto

namespace Cosmos\Base\Tendermint\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Header defines the structure of a Tendermint block header.
 *
 * Generated from protobuf message <code>cosmos.base.tendermint.v1beta1.Header</code>
 */
class Header extends \Google\Protobuf\Internal\Message
{
    /**
     * basic block info
     *
     * Generated from protobuf field <code>.tendermint.version.Consensus version = 1 [json_name = "version", (.gogoproto.nullable) = false];</code>
     */
    protected $version = null;
    /**
     * Generated from protobuf field <code>string chain_id = 2 [json_name = "chainId", (.gogoproto.customname) = "ChainID"];</code>
     */
    protected $chain_id = '';
    /**
     * Generated from protobuf field <code>int64 height = 3 [json_name = "height"];</code>
     */
    protected $height = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 4 [json_name = "time", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     */
    protected $time = null;
    /**
     * prev block info
     *
     * Generated from protobuf field <code>.tendermint.types.BlockID last_block_id = 5 [json_name = "lastBlockId", (.gogoproto.nullable) = false];</code>
     */
    protected $last_block_id = null;
    /**
     * hashes of block data
     *
     * Generated from protobuf field <code>bytes last_commit_hash = 6 [json_name = "lastCommitHash"];</code>
     */
    protected $last_commit_hash = '';
    /**
     * transactions
     *
     * Generated from protobuf field <code>bytes data_hash = 7 [json_name = "dataHash"];</code>
     */
    protected $data_hash = '';
    /**
     * hashes from the app output from the prev block
     *
     * Generated from protobuf field <code>bytes validators_hash = 8 [json_name = "validatorsHash"];</code>
     */
    protected $validators_hash = '';
    /**
     * validators for the next block
     *
     * Generated from protobuf field <code>bytes next_validators_hash = 9 [json_name = "nextValidatorsHash"];</code>
     */
    protected $next_validators_hash = '';
    /**
     * consensus params for current block
     *
     * Generated from protobuf field <code>bytes consensus_hash = 10 [json_name = "consensusHash"];</code>
     */
    protected $consensus_hash = '';
    /**
     * state after txs from the previous block
     *
     * Generated from protobuf field <code>bytes app_hash = 11 [json_name = "appHash"];</code>
     */
    protected $app_hash = '';
    /**
     * root hash of all results from the txs from the previous block
     *
     * Generated from protobuf field <code>bytes last_results_hash = 12 [json_name = "lastResultsHash"];</code>
     */
    protected $last_results_hash = '';
    /**
     * consensus info
     *
     * Generated from protobuf field <code>bytes evidence_hash = 13 [json_name = "evidenceHash"];</code>
     */
    protected $evidence_hash = '';
    /**
     * proposer_address is the original block proposer address, formatted as a Bech32 string.
     * In Tendermint, this type is `bytes`, but in the SDK, we convert it to a Bech32 string
     * for better UX.
     *
     * Generated from protobuf field <code>string proposer_address = 14 [json_name = "proposerAddress"];</code>
     */
    protected $proposer_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tendermint\Version\Consensus $version
     *           basic block info
     *     @type string $chain_id
     *     @type int|string $height
     *     @type \Google\Protobuf\Timestamp $time
     *     @type \Tendermint\Types\BlockID $last_block_id
     *           prev block info
     *     @type string $last_commit_hash
     *           hashes of block data
     *     @type string $data_hash
     *           transactions
     *     @type string $validators_hash
     *           hashes from the app output from the prev block
     *     @type string $next_validators_hash
     *           validators for the next block
     *     @type string $consensus_hash
     *           consensus params for current block
     *     @type string $app_hash
     *           state after txs from the previous block
     *     @type string $last_results_hash
     *           root hash of all results from the txs from the previous block
     *     @type string $evidence_hash
     *           consensus info
     *     @type string $proposer_address
     *           proposer_address is the original block proposer address, formatted as a Bech32 string.
     *           In Tendermint, this type is `bytes`, but in the SDK, we convert it to a Bech32 string
     *           for better UX.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Base\Tendermint\V1Beta1\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * basic block info
     *
     * Generated from protobuf field <code>.tendermint.version.Consensus version = 1 [json_name = "version", (.gogoproto.nullable) = false];</code>
     * @return \Tendermint\Version\Consensus|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * basic block info
     *
     * Generated from protobuf field <code>.tendermint.version.Consensus version = 1 [json_name = "version", (.gogoproto.nullable) = false];</code>
     * @param \Tendermint\Version\Consensus $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Version\Consensus::class);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string chain_id = 2 [json_name = "chainId", (.gogoproto.customname) = "ChainID"];</code>
     * @return string
     */
    public function getChainId()
    {
        return $this->chain_id;
    }

    /**
     * Generated from protobuf field <code>string chain_id = 2 [json_name = "chainId", (.gogoproto.customname) = "ChainID"];</code>
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
     * Generated from protobuf field <code>int64 height = 3 [json_name = "height"];</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
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
     * prev block info
     *
     * Generated from protobuf field <code>.tendermint.types.BlockID last_block_id = 5 [json_name = "lastBlockId", (.gogoproto.nullable) = false];</code>
     * @return \Tendermint\Types\BlockID|null
     */
    public function getLastBlockId()
    {
        return $this->last_block_id;
    }

    public function hasLastBlockId()
    {
        return isset($this->last_block_id);
    }

    public function clearLastBlockId()
    {
        unset($this->last_block_id);
    }

    /**
     * prev block info
     *
     * Generated from protobuf field <code>.tendermint.types.BlockID last_block_id = 5 [json_name = "lastBlockId", (.gogoproto.nullable) = false];</code>
     * @param \Tendermint\Types\BlockID $var
     * @return $this
     */
    public function setLastBlockId($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Types\BlockID::class);
        $this->last_block_id = $var;

        return $this;
    }

    /**
     * hashes of block data
     *
     * Generated from protobuf field <code>bytes last_commit_hash = 6 [json_name = "lastCommitHash"];</code>
     * @return string
     */
    public function getLastCommitHash()
    {
        return $this->last_commit_hash;
    }

    /**
     * hashes of block data
     *
     * Generated from protobuf field <code>bytes last_commit_hash = 6 [json_name = "lastCommitHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setLastCommitHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->last_commit_hash = $var;

        return $this;
    }

    /**
     * transactions
     *
     * Generated from protobuf field <code>bytes data_hash = 7 [json_name = "dataHash"];</code>
     * @return string
     */
    public function getDataHash()
    {
        return $this->data_hash;
    }

    /**
     * transactions
     *
     * Generated from protobuf field <code>bytes data_hash = 7 [json_name = "dataHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setDataHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->data_hash = $var;

        return $this;
    }

    /**
     * hashes from the app output from the prev block
     *
     * Generated from protobuf field <code>bytes validators_hash = 8 [json_name = "validatorsHash"];</code>
     * @return string
     */
    public function getValidatorsHash()
    {
        return $this->validators_hash;
    }

    /**
     * hashes from the app output from the prev block
     *
     * Generated from protobuf field <code>bytes validators_hash = 8 [json_name = "validatorsHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setValidatorsHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->validators_hash = $var;

        return $this;
    }

    /**
     * validators for the next block
     *
     * Generated from protobuf field <code>bytes next_validators_hash = 9 [json_name = "nextValidatorsHash"];</code>
     * @return string
     */
    public function getNextValidatorsHash()
    {
        return $this->next_validators_hash;
    }

    /**
     * validators for the next block
     *
     * Generated from protobuf field <code>bytes next_validators_hash = 9 [json_name = "nextValidatorsHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setNextValidatorsHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->next_validators_hash = $var;

        return $this;
    }

    /**
     * consensus params for current block
     *
     * Generated from protobuf field <code>bytes consensus_hash = 10 [json_name = "consensusHash"];</code>
     * @return string
     */
    public function getConsensusHash()
    {
        return $this->consensus_hash;
    }

    /**
     * consensus params for current block
     *
     * Generated from protobuf field <code>bytes consensus_hash = 10 [json_name = "consensusHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setConsensusHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->consensus_hash = $var;

        return $this;
    }

    /**
     * state after txs from the previous block
     *
     * Generated from protobuf field <code>bytes app_hash = 11 [json_name = "appHash"];</code>
     * @return string
     */
    public function getAppHash()
    {
        return $this->app_hash;
    }

    /**
     * state after txs from the previous block
     *
     * Generated from protobuf field <code>bytes app_hash = 11 [json_name = "appHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setAppHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->app_hash = $var;

        return $this;
    }

    /**
     * root hash of all results from the txs from the previous block
     *
     * Generated from protobuf field <code>bytes last_results_hash = 12 [json_name = "lastResultsHash"];</code>
     * @return string
     */
    public function getLastResultsHash()
    {
        return $this->last_results_hash;
    }

    /**
     * root hash of all results from the txs from the previous block
     *
     * Generated from protobuf field <code>bytes last_results_hash = 12 [json_name = "lastResultsHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setLastResultsHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->last_results_hash = $var;

        return $this;
    }

    /**
     * consensus info
     *
     * Generated from protobuf field <code>bytes evidence_hash = 13 [json_name = "evidenceHash"];</code>
     * @return string
     */
    public function getEvidenceHash()
    {
        return $this->evidence_hash;
    }

    /**
     * consensus info
     *
     * Generated from protobuf field <code>bytes evidence_hash = 13 [json_name = "evidenceHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setEvidenceHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->evidence_hash = $var;

        return $this;
    }

    /**
     * proposer_address is the original block proposer address, formatted as a Bech32 string.
     * In Tendermint, this type is `bytes`, but in the SDK, we convert it to a Bech32 string
     * for better UX.
     *
     * Generated from protobuf field <code>string proposer_address = 14 [json_name = "proposerAddress"];</code>
     * @return string
     */
    public function getProposerAddress()
    {
        return $this->proposer_address;
    }

    /**
     * proposer_address is the original block proposer address, formatted as a Bech32 string.
     * In Tendermint, this type is `bytes`, but in the SDK, we convert it to a Bech32 string
     * for better UX.
     *
     * Generated from protobuf field <code>string proposer_address = 14 [json_name = "proposerAddress"];</code>
     * @param string $var
     * @return $this
     */
    public function setProposerAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->proposer_address = $var;

        return $this;
    }

}

