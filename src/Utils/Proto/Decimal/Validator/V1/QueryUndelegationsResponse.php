<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/query.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryDelegationsResponse is response type for the Query/Undelegations RPC method.
 *
 * Generated from protobuf message <code>decimal.validator.v1.QueryUndelegationsResponse</code>
 */
class QueryUndelegationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * undelegations defines the undelegations list for given delegator validator pair.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Undelegation undelegations = 1 [json_name = "undelegations", (.gogoproto.nullable) = false];</code>
     */
    private $undelegations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Decimal\Validator\V1\Undelegation>|\Google\Protobuf\Internal\RepeatedField $undelegations
     *           undelegations defines the undelegations list for given delegator validator pair.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * undelegations defines the undelegations list for given delegator validator pair.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Undelegation undelegations = 1 [json_name = "undelegations", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUndelegations()
    {
        return $this->undelegations;
    }

    /**
     * undelegations defines the undelegations list for given delegator validator pair.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Undelegation undelegations = 1 [json_name = "undelegations", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\Undelegation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUndelegations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\Undelegation::class);
        $this->undelegations = $arr;

        return $this;
    }

}
