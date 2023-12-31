<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/transfer/v1/query.proto

namespace Ibc\Applications\Transfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryConnectionsResponse is the response type for the Query/DenomTraces RPC
 * method.
 *
 * Generated from protobuf message <code>ibc.applications.transfer.v1.QueryDenomTracesResponse</code>
 */
class QueryDenomTracesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * denom_traces returns all denominations trace information.
     *
     * Generated from protobuf field <code>repeated .ibc.applications.transfer.v1.DenomTrace denom_traces = 1 [json_name = "denomTraces", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "Traces"];</code>
     */
    private $denom_traces;
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
     *     @type \Ibc\Applications\Transfer\V1\DenomTrace[]|\Google\Protobuf\Internal\RepeatedField $denom_traces
     *           denom_traces returns all denominations trace information.
     *     @type \Cosmos\Base\Query\V1beta1\PageResponse $pagination
     *           pagination defines the pagination in the response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\Transfer\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * denom_traces returns all denominations trace information.
     *
     * Generated from protobuf field <code>repeated .ibc.applications.transfer.v1.DenomTrace denom_traces = 1 [json_name = "denomTraces", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "Traces"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDenomTraces()
    {
        return $this->denom_traces;
    }

    /**
     * denom_traces returns all denominations trace information.
     *
     * Generated from protobuf field <code>repeated .ibc.applications.transfer.v1.DenomTrace denom_traces = 1 [json_name = "denomTraces", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "Traces"];</code>
     * @param \Ibc\Applications\Transfer\V1\DenomTrace[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDenomTraces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Applications\Transfer\V1\DenomTrace::class);
        $this->denom_traces = $arr;

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

