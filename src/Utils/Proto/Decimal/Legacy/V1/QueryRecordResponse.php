<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/legacy/v1/query.proto

namespace Decimal\Legacy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryRecordResponse is response type for the Query/Record RPC method.
 *
 * Generated from protobuf message <code>decimal.legacy.v1.QueryRecordResponse</code>
 */
class QueryRecordResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * record defines legacy record found by the request.
     *
     * Generated from protobuf field <code>.decimal.legacy.v1.Record record = 1 [json_name = "record", (.gogoproto.nullable) = false];</code>
     */
    protected $record = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Decimal\Legacy\V1\Record $record
     *           record defines legacy record found by the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Legacy\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * record defines legacy record found by the request.
     *
     * Generated from protobuf field <code>.decimal.legacy.v1.Record record = 1 [json_name = "record", (.gogoproto.nullable) = false];</code>
     * @return \Decimal\Legacy\V1\Record|null
     */
    public function getRecord()
    {
        return $this->record;
    }

    public function hasRecord()
    {
        return isset($this->record);
    }

    public function clearRecord()
    {
        unset($this->record);
    }

    /**
     * record defines legacy record found by the request.
     *
     * Generated from protobuf field <code>.decimal.legacy.v1.Record record = 1 [json_name = "record", (.gogoproto.nullable) = false];</code>
     * @param \Decimal\Legacy\V1\Record $var
     * @return $this
     */
    public function setRecord($var)
    {
        GPBUtil::checkMessage($var, \Decimal\Legacy\V1\Record::class);
        $this->record = $var;

        return $this;
    }

}

