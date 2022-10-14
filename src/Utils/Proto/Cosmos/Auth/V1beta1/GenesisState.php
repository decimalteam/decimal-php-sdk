<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/auth/v1beta1/genesis.proto

namespace Cosmos\Auth\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the auth module's genesis state.
 *
 * Generated from protobuf message <code>cosmos.auth.v1beta1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * params defines all the paramaters of the module.
     *
     * Generated from protobuf field <code>.cosmos.auth.v1beta1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     */
    protected $params = null;
    /**
     * accounts are the accounts present at genesis.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any accounts = 2 [json_name = "accounts"];</code>
     */
    private $accounts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Auth\V1beta1\Params $params
     *           params defines all the paramaters of the module.
     *     @type array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $accounts
     *           accounts are the accounts present at genesis.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Auth\V1beta1\GPBMetadata\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * params defines all the paramaters of the module.
     *
     * Generated from protobuf field <code>.cosmos.auth.v1beta1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Auth\V1beta1\Params|null
     */
    public function getParams()
    {
        return $this->params;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * params defines all the paramaters of the module.
     *
     * Generated from protobuf field <code>.cosmos.auth.v1beta1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Auth\V1beta1\Params $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Auth\V1beta1\Params::class);
        $this->params = $var;

        return $this;
    }

    /**
     * accounts are the accounts present at genesis.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any accounts = 2 [json_name = "accounts"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * accounts are the accounts present at genesis.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any accounts = 2 [json_name = "accounts"];</code>
     * @param array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->accounts = $arr;

        return $this;
    }

}
