<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/query.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryValidatorAccountResponse is the response type for the
 * Query/ValidatorAccount RPC method.
 *
 * Generated from protobuf message <code>ethermint.evm.v1.QueryValidatorAccountResponse</code>
 */
class QueryValidatorAccountResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * account_address is the cosmos address of the account in bech32 format.
     *
     * Generated from protobuf field <code>string account_address = 1 [json_name = "accountAddress"];</code>
     */
    protected $account_address = '';
    /**
     * sequence is the account's sequence number.
     *
     * Generated from protobuf field <code>uint64 sequence = 2 [json_name = "sequence"];</code>
     */
    protected $sequence = 0;
    /**
     * account_number is the account number
     *
     * Generated from protobuf field <code>uint64 account_number = 3 [json_name = "accountNumber"];</code>
     */
    protected $account_number = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_address
     *           account_address is the cosmos address of the account in bech32 format.
     *     @type int|string $sequence
     *           sequence is the account's sequence number.
     *     @type int|string $account_number
     *           account_number is the account number
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * account_address is the cosmos address of the account in bech32 format.
     *
     * Generated from protobuf field <code>string account_address = 1 [json_name = "accountAddress"];</code>
     * @return string
     */
    public function getAccountAddress()
    {
        return $this->account_address;
    }

    /**
     * account_address is the cosmos address of the account in bech32 format.
     *
     * Generated from protobuf field <code>string account_address = 1 [json_name = "accountAddress"];</code>
     * @param string $var
     * @return $this
     */
    public function setAccountAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_address = $var;

        return $this;
    }

    /**
     * sequence is the account's sequence number.
     *
     * Generated from protobuf field <code>uint64 sequence = 2 [json_name = "sequence"];</code>
     * @return int|string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * sequence is the account's sequence number.
     *
     * Generated from protobuf field <code>uint64 sequence = 2 [json_name = "sequence"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->sequence = $var;

        return $this;
    }

    /**
     * account_number is the account number
     *
     * Generated from protobuf field <code>uint64 account_number = 3 [json_name = "accountNumber"];</code>
     * @return int|string
     */
    public function getAccountNumber()
    {
        return $this->account_number;
    }

    /**
     * account_number is the account number
     *
     * Generated from protobuf field <code>uint64 account_number = 3 [json_name = "accountNumber"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAccountNumber($var)
    {
        GPBUtil::checkUint64($var);
        $this->account_number = $var;

        return $this;
    }

}
