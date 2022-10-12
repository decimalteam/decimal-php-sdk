<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/authz/v1beta1/authz.proto

namespace Cosmos\Authz\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Grant gives permissions to execute
 * the provide method with expiration time.
 *
 * Generated from protobuf message <code>cosmos.authz.v1beta1.Grant</code>
 */
class Grant extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Any authorization = 1 [json_name = "authorization", (.cosmos_proto.accepts_interface) = "Authorization"];</code>
     */
    protected $authorization = null;
    /**
     * time when the grant will expire and will be pruned. If null, then the grant
     * doesn't have a time expiration (other conditions  in `authorization`
     * may apply to invalidate the grant)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration = 2 [json_name = "expiration", (.gogoproto.nullable) = true, (.gogoproto.stdtime) = true];</code>
     */
    protected $expiration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Any $authorization
     *     @type \Google\Protobuf\Timestamp $expiration
     *           time when the grant will expire and will be pruned. If null, then the grant
     *           doesn't have a time expiration (other conditions  in `authorization`
     *           may apply to invalidate the grant)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Authz\V1Beta1\Authz::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any authorization = 1 [json_name = "authorization", (.cosmos_proto.accepts_interface) = "Authorization"];</code>
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
     * Generated from protobuf field <code>.google.protobuf.Any authorization = 1 [json_name = "authorization", (.cosmos_proto.accepts_interface) = "Authorization"];</code>
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
     * time when the grant will expire and will be pruned. If null, then the grant
     * doesn't have a time expiration (other conditions  in `authorization`
     * may apply to invalidate the grant)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration = 2 [json_name = "expiration", (.gogoproto.nullable) = true, (.gogoproto.stdtime) = true];</code>
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
     * time when the grant will expire and will be pruned. If null, then the grant
     * doesn't have a time expiration (other conditions  in `authorization`
     * may apply to invalidate the grant)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration = 2 [json_name = "expiration", (.gogoproto.nullable) = true, (.gogoproto.stdtime) = true];</code>
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

