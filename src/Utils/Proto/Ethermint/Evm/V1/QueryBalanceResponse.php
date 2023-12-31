<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/query.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryBalanceResponse is the response type for the Query/Balance RPC method.
 *
 * Generated from protobuf message <code>ethermint.evm.v1.QueryBalanceResponse</code>
 */
class QueryBalanceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * balance is the balance of the EVM denomination.
     *
     * Generated from protobuf field <code>string balance = 1 [json_name = "balance"];</code>
     */
    protected $balance = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $balance
     *           balance is the balance of the EVM denomination.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * balance is the balance of the EVM denomination.
     *
     * Generated from protobuf field <code>string balance = 1 [json_name = "balance"];</code>
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * balance is the balance of the EVM denomination.
     *
     * Generated from protobuf field <code>string balance = 1 [json_name = "balance"];</code>
     * @param string $var
     * @return $this
     */
    public function setBalance($var)
    {
        GPBUtil::checkString($var, True);
        $this->balance = $var;

        return $this;
    }

}

