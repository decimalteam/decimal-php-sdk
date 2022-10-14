<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/lightclients/solomachine/v1/solomachine.proto

namespace Ibc\Lightclients\Solomachine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Header defines a solo machine consensus header
 *
 * Generated from protobuf message <code>ibc.lightclients.solomachine.v1.Header</code>
 */
class Header extends \Google\Protobuf\Internal\Message
{
    /**
     * sequence to update solo machine public key at
     *
     * Generated from protobuf field <code>uint64 sequence = 1 [json_name = "sequence"];</code>
     */
    protected $sequence = 0;
    /**
     * Generated from protobuf field <code>uint64 timestamp = 2 [json_name = "timestamp"];</code>
     */
    protected $timestamp = 0;
    /**
     * Generated from protobuf field <code>bytes signature = 3 [json_name = "signature"];</code>
     */
    protected $signature = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Any new_public_key = 4 [json_name = "newPublicKey", (.gogoproto.moretags) = "yaml:\"new_public_key\""];</code>
     */
    protected $new_public_key = null;
    /**
     * Generated from protobuf field <code>string new_diversifier = 5 [json_name = "newDiversifier", (.gogoproto.moretags) = "yaml:\"new_diversifier\""];</code>
     */
    protected $new_diversifier = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $sequence
     *           sequence to update solo machine public key at
     *     @type int|string $timestamp
     *     @type string $signature
     *     @type \Google\Protobuf\Any $new_public_key
     *     @type string $new_diversifier
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Lightclients\Solomachine\V1\Solomachine::initOnce();
        parent::__construct($data);
    }

    /**
     * sequence to update solo machine public key at
     *
     * Generated from protobuf field <code>uint64 sequence = 1 [json_name = "sequence"];</code>
     * @return int|string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * sequence to update solo machine public key at
     *
     * Generated from protobuf field <code>uint64 sequence = 1 [json_name = "sequence"];</code>
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
     * Generated from protobuf field <code>uint64 timestamp = 2 [json_name = "timestamp"];</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>uint64 timestamp = 2 [json_name = "timestamp"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes signature = 3 [json_name = "signature"];</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Generated from protobuf field <code>bytes signature = 3 [json_name = "signature"];</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any new_public_key = 4 [json_name = "newPublicKey", (.gogoproto.moretags) = "yaml:\"new_public_key\""];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getNewPublicKey()
    {
        return $this->new_public_key;
    }

    public function hasNewPublicKey()
    {
        return isset($this->new_public_key);
    }

    public function clearNewPublicKey()
    {
        unset($this->new_public_key);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any new_public_key = 4 [json_name = "newPublicKey", (.gogoproto.moretags) = "yaml:\"new_public_key\""];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setNewPublicKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->new_public_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string new_diversifier = 5 [json_name = "newDiversifier", (.gogoproto.moretags) = "yaml:\"new_diversifier\""];</code>
     * @return string
     */
    public function getNewDiversifier()
    {
        return $this->new_diversifier;
    }

    /**
     * Generated from protobuf field <code>string new_diversifier = 5 [json_name = "newDiversifier", (.gogoproto.moretags) = "yaml:\"new_diversifier\""];</code>
     * @param string $var
     * @return $this
     */
    public function setNewDiversifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_diversifier = $var;

        return $this;
    }

}
