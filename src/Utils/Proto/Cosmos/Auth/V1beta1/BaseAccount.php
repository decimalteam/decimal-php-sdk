<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/auth/v1beta1/auth.proto

namespace Cosmos\Auth\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BaseAccount defines a base account type. It contains all the necessary fields
 * for basic account functionality. Any custom account type should extend this
 * type for additional functionality (e.g. vesting).
 *
 * Generated from protobuf message <code>cosmos.auth.v1beta1.BaseAccount</code>
 */
class BaseAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     */
    protected $address = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Any pub_key = 2 [json_name = "pubKey", (.gogoproto.jsontag) = "public_key,omitempty", (.gogoproto.moretags) = "yaml:\"public_key\""];</code>
     */
    protected $pub_key = null;
    /**
     * Generated from protobuf field <code>uint64 account_number = 3 [json_name = "accountNumber", (.gogoproto.moretags) = "yaml:\"account_number\""];</code>
     */
    protected $account_number = 0;
    /**
     * Generated from protobuf field <code>uint64 sequence = 4 [json_name = "sequence"];</code>
     */
    protected $sequence = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *     @type \Google\Protobuf\Any $pub_key
     *     @type int|string $account_number
     *     @type int|string $sequence
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Auth\V1beta1\GPBMetadata\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any pub_key = 2 [json_name = "pubKey", (.gogoproto.jsontag) = "public_key,omitempty", (.gogoproto.moretags) = "yaml:\"public_key\""];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getPubKey()
    {
        return $this->pub_key;
    }

    public function hasPubKey()
    {
        return isset($this->pub_key);
    }

    public function clearPubKey()
    {
        unset($this->pub_key);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any pub_key = 2 [json_name = "pubKey", (.gogoproto.jsontag) = "public_key,omitempty", (.gogoproto.moretags) = "yaml:\"public_key\""];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setPubKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->pub_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 account_number = 3 [json_name = "accountNumber", (.gogoproto.moretags) = "yaml:\"account_number\""];</code>
     * @return int|string
     */
    public function getAccountNumber()
    {
        return $this->account_number;
    }

    /**
     * Generated from protobuf field <code>uint64 account_number = 3 [json_name = "accountNumber", (.gogoproto.moretags) = "yaml:\"account_number\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAccountNumber($var)
    {
        GPBUtil::checkUint64($var);
        $this->account_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 sequence = 4 [json_name = "sequence"];</code>
     * @return int|string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Generated from protobuf field <code>uint64 sequence = 4 [json_name = "sequence"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->sequence = $var;

        return $this;
    }

}

