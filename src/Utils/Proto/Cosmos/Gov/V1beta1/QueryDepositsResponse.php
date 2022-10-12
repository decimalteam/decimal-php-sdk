<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1beta1/query.proto

namespace Cosmos\Gov\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryDepositsResponse is the response type for the Query/Deposits RPC method.
 *
 * Generated from protobuf message <code>cosmos.gov.v1beta1.QueryDepositsResponse</code>
 */
class QueryDepositsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cosmos.gov.v1beta1.Deposit deposits = 1 [json_name = "deposits", (.gogoproto.nullable) = false];</code>
     */
    private $deposits;
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
     *     @type \Cosmos\Gov\V1beta1\Deposit[]|\Google\Protobuf\Internal\RepeatedField $deposits
     *     @type \Cosmos\Base\Query\V1beta1\PageResponse $pagination
     *           pagination defines the pagination in the response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Gov\V1Beta1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.gov.v1beta1.Deposit deposits = 1 [json_name = "deposits", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeposits()
    {
        return $this->deposits;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.gov.v1beta1.Deposit deposits = 1 [json_name = "deposits", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Gov\V1beta1\Deposit[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeposits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Gov\V1beta1\Deposit::class);
        $this->deposits = $arr;

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

