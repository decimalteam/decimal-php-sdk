<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/query.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryValidatorAccountRequest is the request type for the
 * Query/ValidatorAccount RPC method.
 *
 * Generated from protobuf message <code>ethermint.evm.v1.QueryValidatorAccountRequest</code>
 */
class QueryValidatorAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * cons_address is the validator cons address to query the account for.
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
     *           cons_address is the validator cons address to query the account for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * cons_address is the validator cons address to query the account for.
     *
     * Generated from protobuf field <code>string cons_address = 1 [json_name = "consAddress"];</code>
     * @return string
     */
    public function getConsAddress()
    {
        return $this->cons_address;
    }

    /**
     * cons_address is the validator cons address to query the account for.
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

