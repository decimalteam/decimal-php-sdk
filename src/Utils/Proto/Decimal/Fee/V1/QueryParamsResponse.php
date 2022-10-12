<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/fee/v1/query.proto

namespace Decimal\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryParamsResponse is response type for the Query/Params RPC method.
 *
 * Generated from protobuf message <code>decimal.fee.v1.QueryParamsResponse</code>
 */
class QueryParamsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.decimal.fee.v1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     */
    protected $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Decimal\Fee\V1\Params $params
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Fee\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.decimal.fee.v1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @return \Decimal\Fee\V1\Params|null
     */
    public function getParams()
    {
        return $this->params;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * Generated from protobuf field <code>.decimal.fee.v1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @param \Decimal\Fee\V1\Params $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Decimal\Fee\V1\Params::class);
        $this->params = $var;

        return $this;
    }

}

