<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1beta1/query.proto

namespace Cosmos\Gov\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryDepositRequest is the request type for the Query/Deposit RPC method.
 *
 * Generated from protobuf message <code>cosmos.gov.v1beta1.QueryDepositRequest</code>
 */
class QueryDepositRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * proposal_id defines the unique id of the proposal.
     *
     * Generated from protobuf field <code>uint64 proposal_id = 1 [json_name = "proposalId"];</code>
     */
    protected $proposal_id = 0;
    /**
     * depositor defines the deposit addresses from the proposals.
     *
     * Generated from protobuf field <code>string depositor = 2 [json_name = "depositor"];</code>
     */
    protected $depositor = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $proposal_id
     *           proposal_id defines the unique id of the proposal.
     *     @type string $depositor
     *           depositor defines the deposit addresses from the proposals.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Gov\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * proposal_id defines the unique id of the proposal.
     *
     * Generated from protobuf field <code>uint64 proposal_id = 1 [json_name = "proposalId"];</code>
     * @return int|string
     */
    public function getProposalId()
    {
        return $this->proposal_id;
    }

    /**
     * proposal_id defines the unique id of the proposal.
     *
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
     * depositor defines the deposit addresses from the proposals.
     *
     * Generated from protobuf field <code>string depositor = 2 [json_name = "depositor"];</code>
     * @return string
     */
    public function getDepositor()
    {
        return $this->depositor;
    }

    /**
     * depositor defines the deposit addresses from the proposals.
     *
     * Generated from protobuf field <code>string depositor = 2 [json_name = "depositor"];</code>
     * @param string $var
     * @return $this
     */
    public function setDepositor($var)
    {
        GPBUtil::checkString($var, True);
        $this->depositor = $var;

        return $this;
    }

}

