<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/distribution/v1beta1/query.proto

namespace Cosmos\Distribution\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryDelegatorValidatorsRequest is the request type for the
 * Query/DelegatorValidators RPC method.
 *
 * Generated from protobuf message <code>cosmos.distribution.v1beta1.QueryDelegatorValidatorsRequest</code>
 */
class QueryDelegatorValidatorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * delegator_address defines the delegator address to query for.
     *
     * Generated from protobuf field <code>string delegator_address = 1 [json_name = "delegatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $delegator_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $delegator_address
     *           delegator_address defines the delegator address to query for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Distribution\V1Beta1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * delegator_address defines the delegator address to query for.
     *
     * Generated from protobuf field <code>string delegator_address = 1 [json_name = "delegatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getDelegatorAddress()
    {
        return $this->delegator_address;
    }

    /**
     * delegator_address defines the delegator address to query for.
     *
     * Generated from protobuf field <code>string delegator_address = 1 [json_name = "delegatorAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setDelegatorAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->delegator_address = $var;

        return $this;
    }

}

