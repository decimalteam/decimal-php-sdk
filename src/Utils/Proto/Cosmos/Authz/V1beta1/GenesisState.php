<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/authz/v1beta1/genesis.proto

namespace Cosmos\Authz\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the authz module's genesis state.
 *
 * Generated from protobuf message <code>cosmos.authz.v1beta1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cosmos.authz.v1beta1.GrantAuthorization authorization = 1 [json_name = "authorization", (.gogoproto.nullable) = false];</code>
     */
    private $authorization;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Authz\V1beta1\GrantAuthorization[]|\Google\Protobuf\Internal\RepeatedField $authorization
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Authz\V1Beta1\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.authz.v1beta1.GrantAuthorization authorization = 1 [json_name = "authorization", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.authz.v1beta1.GrantAuthorization authorization = 1 [json_name = "authorization", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Authz\V1beta1\GrantAuthorization[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuthorization($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Authz\V1beta1\GrantAuthorization::class);
        $this->authorization = $arr;

        return $this;
    }

}

