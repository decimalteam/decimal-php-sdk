<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/query.proto

namespace Cosmos\Staking\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryValidatorUnbondingDelegationsResponse is response type for the
 * Query/ValidatorUnbondingDelegations RPC method.
 *
 * Generated from protobuf message <code>cosmos.staking.v1beta1.QueryValidatorUnbondingDelegationsResponse</code>
 */
class QueryValidatorUnbondingDelegationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cosmos.staking.v1beta1.UnbondingDelegation unbonding_responses = 1 [json_name = "unbondingResponses", (.gogoproto.nullable) = false];</code>
     */
    private $unbonding_responses;
    /**
     * pagination defines the pagination in the response.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageResponse pagination = 2 [json_name = "pagination"];</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Cosmos\Staking\V1beta1\UnbondingDelegation>|\Google\Protobuf\Internal\RepeatedField $unbonding_responses
     *     @type \Cosmos\Base\Query\V1beta1\PageResponse $pagination
     *           pagination defines the pagination in the response.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Staking\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.staking.v1beta1.UnbondingDelegation unbonding_responses = 1 [json_name = "unbondingResponses", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnbondingResponses()
    {
        return $this->unbonding_responses;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.staking.v1beta1.UnbondingDelegation unbonding_responses = 1 [json_name = "unbondingResponses", (.gogoproto.nullable) = false];</code>
     * @param array<\Cosmos\Staking\V1beta1\UnbondingDelegation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnbondingResponses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Staking\V1beta1\UnbondingDelegation::class);
        $this->unbonding_responses = $arr;

        return $this;
    }

    /**
     * pagination defines the pagination in the response.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageResponse pagination = 2 [json_name = "pagination"];</code>
     * @return \Cosmos\Base\Query\V1beta1\PageResponse|null
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
     * pagination defines the pagination in the response.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageResponse pagination = 2 [json_name = "pagination"];</code>
     * @param \Cosmos\Base\Query\V1beta1\PageResponse $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Query\V1beta1\PageResponse::class);
        $this->pagination = $var;

        return $this;
    }

}

