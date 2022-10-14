<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/crypto/keys.proto

namespace Tendermint\Crypto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PublicKey defines the keys available for use with Tendermint Validators
 *
 * Generated from protobuf message <code>tendermint.crypto.PublicKey</code>
 */
class PublicKey extends \Google\Protobuf\Internal\Message
{
    protected $sum;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ed25519
     *     @type string $secp256k1
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Crypto\GPBMetadata\Keys::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes ed25519 = 1 [json_name = "ed25519"];</code>
     * @return string
     */
    public function getEd25519()
    {
        return $this->readOneof(1);
    }

    public function hasEd25519()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>bytes ed25519 = 1 [json_name = "ed25519"];</code>
     * @param string $var
     * @return $this
     */
    public function setEd25519($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes secp256k1 = 2 [json_name = "secp256k1"];</code>
     * @return string
     */
    public function getSecp256K1()
    {
        return $this->readOneof(2);
    }

    public function hasSecp256K1()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>bytes secp256k1 = 2 [json_name = "secp256k1"];</code>
     * @param string $var
     * @return $this
     */
    public function setSecp256K1($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSum()
    {
        return $this->whichOneof("sum");
    }

}
