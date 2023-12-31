<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1beta1/gov.proto

namespace Cosmos\Gov\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Vote defines a vote on a governance proposal.
 * A Vote consists of a proposal ID, the voter, and the vote option.
 *
 * Generated from protobuf message <code>cosmos.gov.v1beta1.Vote</code>
 */
class Vote extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 proposal_id = 1 [json_name = "proposalId", (.gogoproto.moretags) = "yaml:\"proposal_id\""];</code>
     */
    protected $proposal_id = 0;
    /**
     * Generated from protobuf field <code>string voter = 2 [json_name = "voter"];</code>
     */
    protected $voter = '';
    /**
     * Deprecated: Prefer to use `options` instead. This field is set in queries
     * if and only if `len(options) == 1` and that option has weight 1. In all
     * other cases, this field will default to VOTE_OPTION_UNSPECIFIED.
     *
     * Generated from protobuf field <code>.cosmos.gov.v1beta1.VoteOption option = 3 [json_name = "option", deprecated = true];</code>
     * @deprecated
     */
    protected $option = 0;
    /**
     * Generated from protobuf field <code>repeated .cosmos.gov.v1beta1.WeightedVoteOption options = 4 [json_name = "options", (.gogoproto.nullable) = false];</code>
     */
    private $options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $proposal_id
     *     @type string $voter
     *     @type int $option
     *           Deprecated: Prefer to use `options` instead. This field is set in queries
     *           if and only if `len(options) == 1` and that option has weight 1. In all
     *           other cases, this field will default to VOTE_OPTION_UNSPECIFIED.
     *     @type array<\Cosmos\Gov\V1beta1\WeightedVoteOption>|\Google\Protobuf\Internal\RepeatedField $options
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Gov\V1beta1\GPBMetadata\Gov::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 proposal_id = 1 [json_name = "proposalId", (.gogoproto.moretags) = "yaml:\"proposal_id\""];</code>
     * @return int|string
     */
    public function getProposalId()
    {
        return $this->proposal_id;
    }

    /**
     * Generated from protobuf field <code>uint64 proposal_id = 1 [json_name = "proposalId", (.gogoproto.moretags) = "yaml:\"proposal_id\""];</code>
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
     * Generated from protobuf field <code>string voter = 2 [json_name = "voter"];</code>
     * @return string
     */
    public function getVoter()
    {
        return $this->voter;
    }

    /**
     * Generated from protobuf field <code>string voter = 2 [json_name = "voter"];</code>
     * @param string $var
     * @return $this
     */
    public function setVoter($var)
    {
        GPBUtil::checkString($var, True);
        $this->voter = $var;

        return $this;
    }

    /**
     * Deprecated: Prefer to use `options` instead. This field is set in queries
     * if and only if `len(options) == 1` and that option has weight 1. In all
     * other cases, this field will default to VOTE_OPTION_UNSPECIFIED.
     *
     * Generated from protobuf field <code>.cosmos.gov.v1beta1.VoteOption option = 3 [json_name = "option", deprecated = true];</code>
     * @return int
     * @deprecated
     */
    public function getOption()
    {
        @trigger_error('option is deprecated.', E_USER_DEPRECATED);
        return $this->option;
    }

    /**
     * Deprecated: Prefer to use `options` instead. This field is set in queries
     * if and only if `len(options) == 1` and that option has weight 1. In all
     * other cases, this field will default to VOTE_OPTION_UNSPECIFIED.
     *
     * Generated from protobuf field <code>.cosmos.gov.v1beta1.VoteOption option = 3 [json_name = "option", deprecated = true];</code>
     * @param int $var
     * @return $this
     * @deprecated
     */
    public function setOption($var)
    {
        @trigger_error('option is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkEnum($var, \Cosmos\Gov\V1beta1\VoteOption::class);
        $this->option = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.gov.v1beta1.WeightedVoteOption options = 4 [json_name = "options", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.gov.v1beta1.WeightedVoteOption options = 4 [json_name = "options", (.gogoproto.nullable) = false];</code>
     * @param array<\Cosmos\Gov\V1beta1\WeightedVoteOption>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Gov\V1beta1\WeightedVoteOption::class);
        $this->options = $arr;

        return $this;
    }

}

