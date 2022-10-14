<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/tx/v1beta1/tx.proto

namespace Cosmos\Tx\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SignerInfo describes the public key and signing mode of a single top-level
 * signer.
 *
 * Generated from protobuf message <code>cosmos.tx.v1beta1.SignerInfo</code>
 */
class SignerInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * public_key is the public key of the signer. It is optional for accounts
     * that already exist in state. If unset, the verifier can use the required \
     * signer address for this position and lookup the public key.
     *
     * Generated from protobuf field <code>.google.protobuf.Any public_key = 1 [json_name = "publicKey"];</code>
     */
    protected $public_key = null;
    /**
     * mode_info describes the signing mode of the signer and is a nested
     * structure to support nested multisig pubkey's
     *
     * Generated from protobuf field <code>.cosmos.tx.v1beta1.ModeInfo mode_info = 2 [json_name = "modeInfo"];</code>
     */
    protected $mode_info = null;
    /**
     * sequence is the sequence of the account, which describes the
     * number of committed transactions signed by a given address. It is used to
     * prevent replay attacks.
     *
     * Generated from protobuf field <code>uint64 sequence = 3 [json_name = "sequence"];</code>
     */
    protected $sequence = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Any $public_key
     *           public_key is the public key of the signer. It is optional for accounts
     *           that already exist in state. If unset, the verifier can use the required \
     *           signer address for this position and lookup the public key.
     *     @type \Cosmos\Tx\V1beta1\ModeInfo $mode_info
     *           mode_info describes the signing mode of the signer and is a nested
     *           structure to support nested multisig pubkey's
     *     @type int|string $sequence
     *           sequence is the sequence of the account, which describes the
     *           number of committed transactions signed by a given address. It is used to
     *           prevent replay attacks.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Tx\V1beta1\GPBMetadata\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * public_key is the public key of the signer. It is optional for accounts
     * that already exist in state. If unset, the verifier can use the required \
     * signer address for this position and lookup the public key.
     *
     * Generated from protobuf field <code>.google.protobuf.Any public_key = 1 [json_name = "publicKey"];</code>
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
     * public_key is the public key of the signer. It is optional for accounts
     * that already exist in state. If unset, the verifier can use the required \
     * signer address for this position and lookup the public key.
     *
     * Generated from protobuf field <code>.google.protobuf.Any public_key = 1 [json_name = "publicKey"];</code>
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
     * mode_info describes the signing mode of the signer and is a nested
     * structure to support nested multisig pubkey's
     *
     * Generated from protobuf field <code>.cosmos.tx.v1beta1.ModeInfo mode_info = 2 [json_name = "modeInfo"];</code>
     * @return \Cosmos\Tx\V1beta1\ModeInfo|null
     */
    public function getModeInfo()
    {
        return $this->mode_info;
    }

    public function hasModeInfo()
    {
        return isset($this->mode_info);
    }

    public function clearModeInfo()
    {
        unset($this->mode_info);
    }

    /**
     * mode_info describes the signing mode of the signer and is a nested
     * structure to support nested multisig pubkey's
     *
     * Generated from protobuf field <code>.cosmos.tx.v1beta1.ModeInfo mode_info = 2 [json_name = "modeInfo"];</code>
     * @param \Cosmos\Tx\V1beta1\ModeInfo $var
     * @return $this
     */
    public function setModeInfo($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Tx\V1beta1\ModeInfo::class);
        $this->mode_info = $var;

        return $this;
    }

    /**
     * sequence is the sequence of the account, which describes the
     * number of committed transactions signed by a given address. It is used to
     * prevent replay attacks.
     *
     * Generated from protobuf field <code>uint64 sequence = 3 [json_name = "sequence"];</code>
     * @return int|string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * sequence is the sequence of the account, which describes the
     * number of committed transactions signed by a given address. It is used to
     * prevent replay attacks.
     *
     * Generated from protobuf field <code>uint64 sequence = 3 [json_name = "sequence"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->sequence = $var;

        return $this;
    }

}

