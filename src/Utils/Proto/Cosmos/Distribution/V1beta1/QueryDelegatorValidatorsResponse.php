<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/distribution/v1beta1/query.proto

namespace Cosmos\Distribution\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryDelegatorValidatorsResponse is the response type for the
 * Query/DelegatorValidators RPC method.
 *
 * Generated from protobuf message <code>cosmos.distribution.v1beta1.QueryDelegatorValidatorsResponse</code>
 */
class QueryDelegatorValidatorsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * validators defines the validators a delegator is delegating for.
     *
     * Generated from protobuf field <code>repeated string validators = 1 [json_name = "validators"];</code>
     */
    private $validators;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $validators
     *           validators defines the validators a delegator is delegating for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Distribution\V1Beta1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * validators defines the validators a delegator is delegating for.
     *
     * Generated from protobuf field <code>repeated string validators = 1 [json_name = "validators"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidators()
    {
        return $this->validators;
    }

    /**
     * validators defines the validators a delegator is delegating for.
     *
     * Generated from protobuf field <code>repeated string validators = 1 [json_name = "validators"];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->validators = $arr;

        return $this;
    }

}

