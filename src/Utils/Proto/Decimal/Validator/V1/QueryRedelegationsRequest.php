<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/query.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryRedelegationsRequest is request type for the Query/Redelegations RPC method.
 *
 * Generated from protobuf message <code>decimal.validator.v1.QueryRedelegationsRequest</code>
 */
class QueryRedelegationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * validator defines the validator address to query for.
     *
     * Generated from protobuf field <code>string validator = 1 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $validator = '';
    /**
     * delegator defines the delegator address to query for.
     *
     * Generated from protobuf field <code>string delegator = 2 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $delegator = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $validator
     *           validator defines the validator address to query for.
     *     @type string $delegator
     *           delegator defines the delegator address to query for.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * validator defines the validator address to query for.
     *
     * Generated from protobuf field <code>string validator = 1 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * validator defines the validator address to query for.
     *
     * Generated from protobuf field <code>string validator = 1 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setValidator($var)
    {
        GPBUtil::checkString($var, True);
        $this->validator = $var;

        return $this;
    }

    /**
     * delegator defines the delegator address to query for.
     *
     * Generated from protobuf field <code>string delegator = 2 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getDelegator()
    {
        return $this->delegator;
    }

    /**
     * delegator defines the delegator address to query for.
     *
     * Generated from protobuf field <code>string delegator = 2 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setDelegator($var)
    {
        GPBUtil::checkString($var, True);
        $this->delegator = $var;

        return $this;
    }

}

