<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/interchain_accounts/v1/account.proto

namespace Ibc\Applications\Interchain_accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An InterchainAccount is defined as a BaseAccount & the address of the account owner on the controller chain
 *
 * Generated from protobuf message <code>ibc.applications.interchain_accounts.v1.InterchainAccount</code>
 */
class InterchainAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cosmos.auth.v1beta1.BaseAccount base_account = 1 [json_name = "baseAccount", (.gogoproto.embed) = true, (.gogoproto.moretags) = "yaml:\"base_account\""];</code>
     */
    protected $base_account = null;
    /**
     * Generated from protobuf field <code>string account_owner = 2 [json_name = "accountOwner", (.gogoproto.moretags) = "yaml:\"account_owner\""];</code>
     */
    protected $account_owner = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Auth\V1beta1\BaseAccount $base_account
     *     @type string $account_owner
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\InterchainAccounts\V1\Account::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cosmos.auth.v1beta1.BaseAccount base_account = 1 [json_name = "baseAccount", (.gogoproto.embed) = true, (.gogoproto.moretags) = "yaml:\"base_account\""];</code>
     * @return \Cosmos\Auth\V1beta1\BaseAccount|null
     */
    public function getBaseAccount()
    {
        return $this->base_account;
    }

    public function hasBaseAccount()
    {
        return isset($this->base_account);
    }

    public function clearBaseAccount()
    {
        unset($this->base_account);
    }

    /**
     * Generated from protobuf field <code>.cosmos.auth.v1beta1.BaseAccount base_account = 1 [json_name = "baseAccount", (.gogoproto.embed) = true, (.gogoproto.moretags) = "yaml:\"base_account\""];</code>
     * @param \Cosmos\Auth\V1beta1\BaseAccount $var
     * @return $this
     */
    public function setBaseAccount($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Auth\V1beta1\BaseAccount::class);
        $this->base_account = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string account_owner = 2 [json_name = "accountOwner", (.gogoproto.moretags) = "yaml:\"account_owner\""];</code>
     * @return string
     */
    public function getAccountOwner()
    {
        return $this->account_owner;
    }

    /**
     * Generated from protobuf field <code>string account_owner = 2 [json_name = "accountOwner", (.gogoproto.moretags) = "yaml:\"account_owner\""];</code>
     * @param string $var
     * @return $this
     */
    public function setAccountOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_owner = $var;

        return $this;
    }

}

