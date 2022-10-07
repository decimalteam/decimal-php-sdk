<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/legacy/v1/query.proto

namespace Decimal\Legacy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryRecordsResponse is response type for the Query/Records RPC method.
 *
 * Generated from protobuf message <code>decimal.legacy.v1.QueryRecordsResponse</code>
 */
class QueryRecordsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .decimal.legacy.v1.Record records = 1 [json_name = "records", (.gogoproto.nullable) = false];</code>
     */
    private $records;
    /**
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageResponse pagination = 2 [json_name = "pagination"];</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Decimal\Legacy\V1\Record[]|\Google\Protobuf\Internal\RepeatedField $records
     *     @type \Cosmos\Base\Query\V1beta1\PageResponse $pagination
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Legacy\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.legacy.v1.Record records = 1 [json_name = "records", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.legacy.v1.Record records = 1 [json_name = "records", (.gogoproto.nullable) = false];</code>
     * @param \Decimal\Legacy\V1\Record[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Legacy\V1\Record::class);
        $this->records = $arr;

        return $this;
    }

    /**
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

