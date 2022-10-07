<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1beta1/gov.proto

namespace Cosmos\Gov\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Proposal defines the core field members of a governance proposal.
 *
 * Generated from protobuf message <code>cosmos.gov.v1beta1.Proposal</code>
 */
class Proposal extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 proposal_id = 1 [json_name = "proposalId"];</code>
     */
    protected $proposal_id = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Any content = 2 [json_name = "content", (.cosmos_proto.accepts_interface) = "Content"];</code>
     */
    protected $content = null;
    /**
     * Generated from protobuf field <code>.cosmos.gov.v1beta1.ProposalStatus status = 3 [json_name = "status"];</code>
     */
    protected $status = 0;
    /**
     * final_tally_result is the final tally result of the proposal. When
     * querying a proposal via gRPC, this field is not populated until the
     * proposal's voting period has ended.
     *
     * Generated from protobuf field <code>.cosmos.gov.v1beta1.TallyResult final_tally_result = 4 [json_name = "finalTallyResult", (.gogoproto.nullable) = false];</code>
     */
    protected $final_tally_result = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp submit_time = 5 [json_name = "submitTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     */
    protected $submit_time = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp deposit_end_time = 6 [json_name = "depositEndTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     */
    protected $deposit_end_time = null;
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin total_deposit = 7 [json_name = "totalDeposit", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     */
    private $total_deposit;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp voting_start_time = 8 [json_name = "votingStartTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     */
    protected $voting_start_time = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp voting_end_time = 9 [json_name = "votingEndTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     */
    protected $voting_end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $proposal_id
     *     @type \Google\Protobuf\Any $content
     *     @type int $status
     *     @type \Cosmos\Gov\V1beta1\TallyResult $final_tally_result
     *           final_tally_result is the final tally result of the proposal. When
     *           querying a proposal via gRPC, this field is not populated until the
     *           proposal's voting period has ended.
     *     @type \Google\Protobuf\Timestamp $submit_time
     *     @type \Google\Protobuf\Timestamp $deposit_end_time
     *     @type \Cosmos\Base\V1beta1\Coin[]|\Google\Protobuf\Internal\RepeatedField $total_deposit
     *     @type \Google\Protobuf\Timestamp $voting_start_time
     *     @type \Google\Protobuf\Timestamp $voting_end_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Gov\V1Beta1\Gov::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 proposal_id = 1 [json_name = "proposalId"];</code>
     * @return int|string
     */
    public function getProposalId()
    {
        return $this->proposal_id;
    }

    /**
     * Generated from protobuf field <code>uint64 proposal_id = 1 [json_name = "proposalId"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setProposalId($var)
    {
        GPBUtil::checkUint64($var);
        $this->proposal_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any content = 2 [json_name = "content", (.cosmos_proto.accepts_interface) = "Content"];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getContent()
    {
        return $this->content;
    }

    public function hasContent()
    {
        return isset($this->content);
    }

    public function clearContent()
    {
        unset($this->content);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any content = 2 [json_name = "content", (.cosmos_proto.accepts_interface) = "Content"];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cosmos.gov.v1beta1.ProposalStatus status = 3 [json_name = "status"];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.cosmos.gov.v1beta1.ProposalStatus status = 3 [json_name = "status"];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Cosmos\Gov\V1beta1\ProposalStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * final_tally_result is the final tally result of the proposal. When
     * querying a proposal via gRPC, this field is not populated until the
     * proposal's voting period has ended.
     *
     * Generated from protobuf field <code>.cosmos.gov.v1beta1.TallyResult final_tally_result = 4 [json_name = "finalTallyResult", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Gov\V1beta1\TallyResult|null
     */
    public function getFinalTallyResult()
    {
        return $this->final_tally_result;
    }

    public function hasFinalTallyResult()
    {
        return isset($this->final_tally_result);
    }

    public function clearFinalTallyResult()
    {
        unset($this->final_tally_result);
    }

    /**
     * final_tally_result is the final tally result of the proposal. When
     * querying a proposal via gRPC, this field is not populated until the
     * proposal's voting period has ended.
     *
     * Generated from protobuf field <code>.cosmos.gov.v1beta1.TallyResult final_tally_result = 4 [json_name = "finalTallyResult", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Gov\V1beta1\TallyResult $var
     * @return $this
     */
    public function setFinalTallyResult($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Gov\V1beta1\TallyResult::class);
        $this->final_tally_result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp submit_time = 5 [json_name = "submitTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSubmitTime()
    {
        return $this->submit_time;
    }

    public function hasSubmitTime()
    {
        return isset($this->submit_time);
    }

    public function clearSubmitTime()
    {
        unset($this->submit_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp submit_time = 5 [json_name = "submitTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSubmitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->submit_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp deposit_end_time = 6 [json_name = "depositEndTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDepositEndTime()
    {
        return $this->deposit_end_time;
    }

    public function hasDepositEndTime()
    {
        return isset($this->deposit_end_time);
    }

    public function clearDepositEndTime()
    {
        unset($this->deposit_end_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp deposit_end_time = 6 [json_name = "depositEndTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDepositEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->deposit_end_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin total_deposit = 7 [json_name = "totalDeposit", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTotalDeposit()
    {
        return $this->total_deposit;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin total_deposit = 7 [json_name = "totalDeposit", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @param \Cosmos\Base\V1beta1\Coin[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTotalDeposit($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\Coin::class);
        $this->total_deposit = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp voting_start_time = 8 [json_name = "votingStartTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getVotingStartTime()
    {
        return $this->voting_start_time;
    }

    public function hasVotingStartTime()
    {
        return isset($this->voting_start_time);
    }

    public function clearVotingStartTime()
    {
        unset($this->voting_start_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp voting_start_time = 8 [json_name = "votingStartTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setVotingStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->voting_start_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp voting_end_time = 9 [json_name = "votingEndTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getVotingEndTime()
    {
        return $this->voting_end_time;
    }

    public function hasVotingEndTime()
    {
        return isset($this->voting_end_time);
    }

    public function clearVotingEndTime()
    {
        unset($this->voting_end_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp voting_end_time = 9 [json_name = "votingEndTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setVotingEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->voting_end_time = $var;

        return $this;
    }

}

