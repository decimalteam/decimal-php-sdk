<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/types/types.proto

namespace Tendermint\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TxProof represents a Merkle proof of the presence of a transaction in the Merkle tree.
 *
 * Generated from protobuf message <code>tendermint.types.TxProof</code>
 */
class TxProof extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes root_hash = 1 [json_name = "rootHash"];</code>
     */
    protected $root_hash = '';
    /**
     * Generated from protobuf field <code>bytes data = 2 [json_name = "data"];</code>
     */
    protected $data = '';
    /**
     * Generated from protobuf field <code>.tendermint.crypto.Proof proof = 3 [json_name = "proof"];</code>
     */
    protected $proof = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $root_hash
     *     @type string $data
     *     @type \Tendermint\Crypto\Proof $proof
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Types\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes root_hash = 1 [json_name = "rootHash"];</code>
     * @return string
     */
    public function getRootHash()
    {
        return $this->root_hash;
    }

    /**
     * Generated from protobuf field <code>bytes root_hash = 1 [json_name = "rootHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setRootHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->root_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 2 [json_name = "data"];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 2 [json_name = "data"];</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.tendermint.crypto.Proof proof = 3 [json_name = "proof"];</code>
     * @return \Tendermint\Crypto\Proof|null
     */
    public function getProof()
    {
        return $this->proof;
    }

    public function hasProof()
    {
        return isset($this->proof);
    }

    public function clearProof()
    {
        unset($this->proof);
    }

    /**
     * Generated from protobuf field <code>.tendermint.crypto.Proof proof = 3 [json_name = "proof"];</code>
     * @param \Tendermint\Crypto\Proof $var
     * @return $this
     */
    public function setProof($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Crypto\Proof::class);
        $this->proof = $var;

        return $this;
    }

}

