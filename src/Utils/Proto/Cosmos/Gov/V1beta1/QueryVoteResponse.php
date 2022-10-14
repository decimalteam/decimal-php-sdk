<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1beta1/query.proto

namespace Cosmos\Gov\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryVoteResponse is the response type for the Query/Vote RPC method.
 *
 * Generated from protobuf message <code>cosmos.gov.v1beta1.QueryVoteResponse</code>
 */
class QueryVoteResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * vote defined the queried vote.
     *
     * Generated from protobuf field <code>.cosmos.gov.v1beta1.Vote vote = 1 [json_name = "vote", (.gogoproto.nullable) = false];</code>
     */
    protected $vote = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Gov\V1beta1\Vote $vote
     *           vote defined the queried vote.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Gov\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * vote defined the queried vote.
     *
     * Generated from protobuf field <code>.cosmos.gov.v1beta1.Vote vote = 1 [json_name = "vote", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Gov\V1beta1\Vote|null
     */
    public function getVote()
    {
        return $this->vote;
    }

    public function hasVote()
    {
        return isset($this->vote);
    }

    public function clearVote()
    {
        unset($this->vote);
    }

    /**
     * vote defined the queried vote.
     *
     * Generated from protobuf field <code>.cosmos.gov.v1beta1.Vote vote = 1 [json_name = "vote", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Gov\V1beta1\Vote $var
     * @return $this
     */
    public function setVote($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Gov\V1beta1\Vote::class);
        $this->vote = $var;

        return $this;
    }

}

