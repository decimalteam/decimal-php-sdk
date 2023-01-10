<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/lightclients/solomachine/v1/solomachine.proto

namespace Ibc\Lightclients\Solomachine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ConsensusState defines a solo machine consensus state. The sequence of a
 * consensus state is contained in the "height" key used in storing the
 * consensus state.
 *
 * Generated from protobuf message <code>ibc.lightclients.solomachine.v1.ConsensusState</code>
 */
class ConsensusState extends \Google\Protobuf\Internal\Message
{
    /**
     * public key of the solo machine
     *
     * Generated from protobuf field <code>.google.protobuf.Any public_key = 1 [json_name = "publicKey", (.gogoproto.moretags) = "yaml:\"public_key\""];</code>
     */
    protected $public_key = null;
    /**
     * diversifier allows the same public key to be re-used across different solo
     * machine clients (potentially on different chains) without being considered
     * misbehaviour.
     *
     * Generated from protobuf field <code>string diversifier = 2 [json_name = "diversifier"];</code>
     */
    protected $diversifier = '';
    /**
     * Generated from protobuf field <code>uint64 timestamp = 3 [json_name = "timestamp"];</code>
     */
    protected $timestamp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Any $public_key
     *           public key of the solo machine
     *     @type string $diversifier
     *           diversifier allows the same public key to be re-used across different solo
     *           machine clients (potentially on different chains) without being considered
     *           misbehaviour.
     *     @type int|string $timestamp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Lightclients\Solomachine\V1\Solomachine::initOnce();
        parent::__construct($data);
    }

    /**
     * public key of the solo machine
     *
     * Generated from protobuf field <code>.google.protobuf.Any public_key = 1 [json_name = "publicKey", (.gogoproto.moretags) = "yaml:\"public_key\""];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    public function hasPublicKey()
    {
        return isset($this->public_key);
    }

    public function clearPublicKey()
    {
        unset($this->public_key);
    }

    /**
     * public key of the solo machine
     *
     * Generated from protobuf field <code>.google.protobuf.Any public_key = 1 [json_name = "publicKey", (.gogoproto.moretags) = "yaml:\"public_key\""];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setPublicKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->public_key = $var;

        return $this;
    }

    /**
     * diversifier allows the same public key to be re-used across different solo
     * machine clients (potentially on different chains) without being considered
     * misbehaviour.
     *
     * Generated from protobuf field <code>string diversifier = 2 [json_name = "diversifier"];</code>
     * @return string
     */
    public function getDiversifier()
    {
        return $this->diversifier;
    }

    /**
     * diversifier allows the same public key to be re-used across different solo
     * machine clients (potentially on different chains) without being considered
     * misbehaviour.
     *
     * Generated from protobuf field <code>string diversifier = 2 [json_name = "diversifier"];</code>
     * @param string $var
     * @return $this
     */
    public function setDiversifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->diversifier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 timestamp = 3 [json_name = "timestamp"];</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>uint64 timestamp = 3 [json_name = "timestamp"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp = $var;

        return $this;
    }

}

