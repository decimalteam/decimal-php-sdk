<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/types/v1/account.proto

namespace Ethermint\Types\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EthAccount implements the authtypes.AccountI interface and embeds an
 * authtypes.BaseAccount type. It is compatible with the auth AccountKeeper.
 *
 * Generated from protobuf message <code>ethermint.types.v1.EthAccount</code>
 */
class EthAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cosmos.auth.v1beta1.BaseAccount base_account = 1 [json_name = "baseAccount", (.gogoproto.embed) = true, (.gogoproto.moretags) = "yaml:\"base_account\""];</code>
     */
    protected $base_account = null;
    /**
     * Generated from protobuf field <code>string code_hash = 2 [json_name = "codeHash", (.gogoproto.moretags) = "yaml:\"code_hash\""];</code>
     */
    protected $code_hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Auth\V1beta1\BaseAccount $base_account
     *     @type string $code_hash
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Types\V1\Account::initOnce();
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
     * Generated from protobuf field <code>string code_hash = 2 [json_name = "codeHash", (.gogoproto.moretags) = "yaml:\"code_hash\""];</code>
     * @return string
     */
    public function getCodeHash()
    {
        return $this->code_hash;
    }

    /**
     * Generated from protobuf field <code>string code_hash = 2 [json_name = "codeHash", (.gogoproto.moretags) = "yaml:\"code_hash\""];</code>
     * @param string $var
     * @return $this
     */
    public function setCodeHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->code_hash = $var;

        return $this;
    }

}

