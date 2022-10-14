<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/authz/v1beta1/genesis.proto

namespace Cosmos\Authz\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GrantAuthorization defines the GenesisState/GrantAuthorization type.
 *
 * Generated from protobuf message <code>cosmos.authz.v1beta1.GrantAuthorization</code>
 */
class GrantAuthorization extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string granter = 1 [json_name = "granter"];</code>
     */
    protected $granter = '';
    /**
     * Generated from protobuf field <code>string grantee = 2 [json_name = "grantee"];</code>
     */
    protected $grantee = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Any authorization = 3 [json_name = "authorization", (.cosmos_proto.accepts_interface) = "Authorization"];</code>
     */
    protected $authorization = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration = 4 [json_name = "expiration", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     */
    protected $expiration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $granter
     *     @type string $grantee
     *     @type \Google\Protobuf\Any $authorization
     *     @type \Google\Protobuf\Timestamp $expiration
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Authz\V1beta1\GPBMetadata\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string granter = 1 [json_name = "granter"];</code>
     * @return string
     */
    public function getGranter()
    {
        return $this->granter;
    }

    /**
     * Generated from protobuf field <code>string granter = 1 [json_name = "granter"];</code>
     * @param string $var
     * @return $this
     */
    public function setGranter($var)
    {
        GPBUtil::checkString($var, True);
        $this->granter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string grantee = 2 [json_name = "grantee"];</code>
     * @return string
     */
    public function getGrantee()
    {
        return $this->grantee;
    }

    /**
     * Generated from protobuf field <code>string grantee = 2 [json_name = "grantee"];</code>
     * @param string $var
     * @return $this
     */
    public function setGrantee($var)
    {
        GPBUtil::checkString($var, True);
        $this->grantee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any authorization = 3 [json_name = "authorization", (.cosmos_proto.accepts_interface) = "Authorization"];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    public function hasAuthorization()
    {
        return isset($this->authorization);
    }

    public function clearAuthorization()
    {
        unset($this->authorization);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any authorization = 3 [json_name = "authorization", (.cosmos_proto.accepts_interface) = "Authorization"];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setAuthorization($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->authorization = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration = 4 [json_name = "expiration", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    public function hasExpiration()
    {
        return isset($this->expiration);
    }

    public function clearExpiration()
    {
        unset($this->expiration);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration = 4 [json_name = "expiration", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiration = $var;

        return $this;
    }

}
