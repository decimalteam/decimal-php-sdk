<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/slashing/v1beta1/query.proto

namespace Cosmos\Slashing\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QuerySigningInfoRequest is the request type for the Query/SigningInfo RPC
 * method
 *
 * Generated from protobuf message <code>cosmos.slashing.v1beta1.QuerySigningInfoRequest</code>
 */
class QuerySigningInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * cons_address is the address to query signing info of
     *
     * Generated from protobuf field <code>string cons_address = 1 [json_name = "consAddress"];</code>
     */
    protected $cons_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cons_address
     *           cons_address is the address to query signing info of
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Slashing\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * cons_address is the address to query signing info of
     *
     * Generated from protobuf field <code>string cons_address = 1 [json_name = "consAddress"];</code>
     * @return string
     */
    public function getConsAddress()
    {
        return $this->cons_address;
    }

    /**
     * cons_address is the address to query signing info of
     *
     * Generated from protobuf field <code>string cons_address = 1 [json_name = "consAddress"];</code>
     * @param string $var
     * @return $this
     */
    public function setConsAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->cons_address = $var;

        return $this;
    }

}
