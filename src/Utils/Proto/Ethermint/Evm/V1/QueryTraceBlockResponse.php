<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/query.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryTraceBlockResponse defines TraceBlock response
 *
 * Generated from protobuf message <code>ethermint.evm.v1.QueryTraceBlockResponse</code>
 */
class QueryTraceBlockResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes data = 1 [json_name = "data"];</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes data = 1 [json_name = "data"];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 1 [json_name = "data"];</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

