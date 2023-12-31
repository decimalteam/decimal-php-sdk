<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/crypto/ed25519/keys.proto

namespace Cosmos\Crypto\Ed25519;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deprecated: PrivKey defines a ed25519 private key.
 * NOTE: ed25519 keys must not be used in SDK apps except in a tendermint validator context.
 *
 * Generated from protobuf message <code>cosmos.crypto.ed25519.PrivKey</code>
 */
class PrivKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes key = 1 [json_name = "key", (.gogoproto.casttype) = "crypto/ed25519.PrivateKey"];</code>
     */
    protected $key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Crypto\Ed25519\GPBMetadata\Keys::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes key = 1 [json_name = "key", (.gogoproto.casttype) = "crypto/ed25519.PrivateKey"];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>bytes key = 1 [json_name = "key", (.gogoproto.casttype) = "crypto/ed25519.PrivateKey"];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->key = $var;

        return $this;
    }

}

