<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/distribution/v1beta1/query.proto

namespace Cosmos\Distribution\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryDelegatorWithdrawAddressResponse is the response type for the
 * Query/DelegatorWithdrawAddress RPC method.
 *
 * Generated from protobuf message <code>cosmos.distribution.v1beta1.QueryDelegatorWithdrawAddressResponse</code>
 */
class QueryDelegatorWithdrawAddressResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * withdraw_address defines the delegator address to query for.
     *
     * Generated from protobuf field <code>string withdraw_address = 1 [json_name = "withdrawAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $withdraw_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $withdraw_address
     *           withdraw_address defines the delegator address to query for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Distribution\V1Beta1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * withdraw_address defines the delegator address to query for.
     *
     * Generated from protobuf field <code>string withdraw_address = 1 [json_name = "withdrawAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getWithdrawAddress()
    {
        return $this->withdraw_address;
    }

    /**
     * withdraw_address defines the delegator address to query for.
     *
     * Generated from protobuf field <code>string withdraw_address = 1 [json_name = "withdrawAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setWithdrawAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->withdraw_address = $var;

        return $this;
    }

}

