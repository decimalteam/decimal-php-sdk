<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/feegrant/v1beta1/query.proto

namespace Cosmos\Feegrant\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryAllowanceResponse is the response type for the Query/Allowance RPC method.
 *
 * Generated from protobuf message <code>cosmos.feegrant.v1beta1.QueryAllowanceResponse</code>
 */
class QueryAllowanceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * allowance is a allowance granted for grantee by granter.
     *
     * Generated from protobuf field <code>.cosmos.feegrant.v1beta1.Grant allowance = 1 [json_name = "allowance"];</code>
     */
    protected $allowance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Feegrant\V1beta1\Grant $allowance
     *           allowance is a allowance granted for grantee by granter.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Feegrant\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * allowance is a allowance granted for grantee by granter.
     *
     * Generated from protobuf field <code>.cosmos.feegrant.v1beta1.Grant allowance = 1 [json_name = "allowance"];</code>
     * @return \Cosmos\Feegrant\V1beta1\Grant|null
     */
    public function getAllowance()
    {
        return $this->allowance;
    }

    public function hasAllowance()
    {
        return isset($this->allowance);
    }

    public function clearAllowance()
    {
        unset($this->allowance);
    }

    /**
     * allowance is a allowance granted for grantee by granter.
     *
     * Generated from protobuf field <code>.cosmos.feegrant.v1beta1.Grant allowance = 1 [json_name = "allowance"];</code>
     * @param \Cosmos\Feegrant\V1beta1\Grant $var
     * @return $this
     */
    public function setAllowance($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Feegrant\V1beta1\Grant::class);
        $this->allowance = $var;

        return $this;
    }

}

