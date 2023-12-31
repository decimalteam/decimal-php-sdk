<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/query.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryCodeResponse is the response type for the Query/Code RPC
 * method.
 *
 * Generated from protobuf message <code>ethermint.evm.v1.QueryCodeResponse</code>
 */
class QueryCodeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * code represents the code bytes from an ethereum address.
     *
     * Generated from protobuf field <code>bytes code = 1 [json_name = "code"];</code>
     */
    protected $code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code
     *           code represents the code bytes from an ethereum address.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * code represents the code bytes from an ethereum address.
     *
     * Generated from protobuf field <code>bytes code = 1 [json_name = "code"];</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * code represents the code bytes from an ethereum address.
     *
     * Generated from protobuf field <code>bytes code = 1 [json_name = "code"];</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, False);
        $this->code = $var;

        return $this;
    }

}

