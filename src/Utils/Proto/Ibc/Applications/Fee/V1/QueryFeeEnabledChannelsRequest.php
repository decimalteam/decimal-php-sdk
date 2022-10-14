<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/fee/v1/query.proto

namespace Ibc\Applications\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryFeeEnabledChannelsRequest defines the request type for the FeeEnabledChannels rpc
 *
 * Generated from protobuf message <code>ibc.applications.fee.v1.QueryFeeEnabledChannelsRequest</code>
 */
class QueryFeeEnabledChannelsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * pagination defines an optional pagination for the request.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 1 [json_name = "pagination"];</code>
     */
    protected $pagination = null;
    /**
     * block height at which to query
     *
     * Generated from protobuf field <code>uint64 query_height = 2 [json_name = "queryHeight"];</code>
     */
    protected $query_height = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Base\Query\V1beta1\PageRequest $pagination
     *           pagination defines an optional pagination for the request.
     *     @type int|string $query_height
     *           block height at which to query
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\Fee\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * pagination defines an optional pagination for the request.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 1 [json_name = "pagination"];</code>
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
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 1 [json_name = "pagination"];</code>
     * @param \Cosmos\Base\Query\V1beta1\PageRequest $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Query\V1beta1\PageRequest::class);
        $this->pagination = $var;

        return $this;
    }

    /**
     * block height at which to query
     *
     * Generated from protobuf field <code>uint64 query_height = 2 [json_name = "queryHeight"];</code>
     * @return int|string
     */
    public function getQueryHeight()
    {
        return $this->query_height;
    }

    /**
     * block height at which to query
     *
     * Generated from protobuf field <code>uint64 query_height = 2 [json_name = "queryHeight"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setQueryHeight($var)
    {
        GPBUtil::checkUint64($var);
        $this->query_height = $var;

        return $this;
    }

}
