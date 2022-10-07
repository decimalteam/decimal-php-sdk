<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1/query.proto

namespace Cosmos\Gov\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryDepositsRequest is the request type for the Query/Deposits RPC method.
 *
 * Generated from protobuf message <code>cosmos.gov.v1.QueryDepositsRequest</code>
 */
class QueryDepositsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * proposal_id defines the unique id of the proposal.
     *
     * Generated from protobuf field <code>uint64 proposal_id = 1 [json_name = "proposalId"];</code>
     */
    protected $proposal_id = 0;
    /**
     * pagination defines an optional pagination for the request.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 2 [json_name = "pagination"];</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $proposal_id
     *           proposal_id defines the unique id of the proposal.
     *     @type \Cosmos\Base\Query\V1beta1\PageRequest $pagination
     *           pagination defines an optional pagination for the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Gov\V1\Query::initOnce();
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
     * pagination defines an optional pagination for the request.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 2 [json_name = "pagination"];</code>
     * @return \Cosmos\Base\Query\V1beta1\PageRequest|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    public function hasPagination()
    {
        return isset($this->pagination);
    }

    public function clearPagination()
    {
        unset($this->pagination);
    }

    /**
     * pagination defines an optional pagination for the request.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 2 [json_name = "pagination"];</code>
     * @param \Cosmos\Base\Query\V1beta1\PageRequest $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Query\V1beta1\PageRequest::class);
        $this->pagination = $var;

        return $this;
    }

}

