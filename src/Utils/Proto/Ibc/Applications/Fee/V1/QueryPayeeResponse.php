<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/fee/v1/query.proto

namespace Ibc\Applications\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryPayeeResponse defines the response type for the Payee rpc
 *
 * Generated from protobuf message <code>ibc.applications.fee.v1.QueryPayeeResponse</code>
 */
class QueryPayeeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * the payee address to which packet fees are paid out
     *
     * Generated from protobuf field <code>string payee_address = 1 [json_name = "payeeAddress", (.gogoproto.moretags) = "yaml:\"payee_address\""];</code>
     */
    protected $payee_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $payee_address
     *           the payee address to which packet fees are paid out
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\Fee\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * the payee address to which packet fees are paid out
     *
     * Generated from protobuf field <code>string payee_address = 1 [json_name = "payeeAddress", (.gogoproto.moretags) = "yaml:\"payee_address\""];</code>
     * @return string
     */
    public function getPayeeAddress()
    {
        return $this->payee_address;
    }

    /**
     * the payee address to which packet fees are paid out
     *
     * Generated from protobuf field <code>string payee_address = 1 [json_name = "payeeAddress", (.gogoproto.moretags) = "yaml:\"payee_address\""];</code>
     * @param string $var
     * @return $this
     */
    public function setPayeeAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->payee_address = $var;

        return $this;
    }

}

