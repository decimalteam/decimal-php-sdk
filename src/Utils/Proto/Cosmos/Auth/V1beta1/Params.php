<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/auth/v1beta1/auth.proto

namespace Cosmos\Auth\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Params defines the parameters for the auth module.
 *
 * Generated from protobuf message <code>cosmos.auth.v1beta1.Params</code>
 */
class Params extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 max_memo_characters = 1 [json_name = "maxMemoCharacters", (.gogoproto.moretags) = "yaml:\"max_memo_characters\""];</code>
     */
    protected $max_memo_characters = 0;
    /**
     * Generated from protobuf field <code>uint64 tx_sig_limit = 2 [json_name = "txSigLimit", (.gogoproto.moretags) = "yaml:\"tx_sig_limit\""];</code>
     */
    protected $tx_sig_limit = 0;
    /**
     * Generated from protobuf field <code>uint64 tx_size_cost_per_byte = 3 [json_name = "txSizeCostPerByte", (.gogoproto.moretags) = "yaml:\"tx_size_cost_per_byte\""];</code>
     */
    protected $tx_size_cost_per_byte = 0;
    /**
     * Generated from protobuf field <code>uint64 sig_verify_cost_ed25519 = 4 [json_name = "sigVerifyCostEd25519", (.gogoproto.customname) = "SigVerifyCostED25519", (.gogoproto.moretags) = "yaml:\"sig_verify_cost_ed25519\""];</code>
     */
    protected $sig_verify_cost_ed25519 = 0;
    /**
     * Generated from protobuf field <code>uint64 sig_verify_cost_secp256k1 = 5 [json_name = "sigVerifyCostSecp256k1", (.gogoproto.customname) = "SigVerifyCostSecp256k1", (.gogoproto.moretags) = "yaml:\"sig_verify_cost_secp256k1\""];</code>
     */
    protected $sig_verify_cost_secp256k1 = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $max_memo_characters
     *     @type int|string $tx_sig_limit
     *     @type int|string $tx_size_cost_per_byte
     *     @type int|string $sig_verify_cost_ed25519
     *     @type int|string $sig_verify_cost_secp256k1
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Auth\V1beta1\GPBMetadata\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 max_memo_characters = 1 [json_name = "maxMemoCharacters", (.gogoproto.moretags) = "yaml:\"max_memo_characters\""];</code>
     * @return int|string
     */
    public function getMaxMemoCharacters()
    {
        return $this->max_memo_characters;
    }

    /**
     * Generated from protobuf field <code>uint64 max_memo_characters = 1 [json_name = "maxMemoCharacters", (.gogoproto.moretags) = "yaml:\"max_memo_characters\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxMemoCharacters($var)
    {
        GPBUtil::checkUint64($var);
        $this->max_memo_characters = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 tx_sig_limit = 2 [json_name = "txSigLimit", (.gogoproto.moretags) = "yaml:\"tx_sig_limit\""];</code>
     * @return int|string
     */
    public function getTxSigLimit()
    {
        return $this->tx_sig_limit;
    }

    /**
     * Generated from protobuf field <code>uint64 tx_sig_limit = 2 [json_name = "txSigLimit", (.gogoproto.moretags) = "yaml:\"tx_sig_limit\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTxSigLimit($var)
    {
        GPBUtil::checkUint64($var);
        $this->tx_sig_limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 tx_size_cost_per_byte = 3 [json_name = "txSizeCostPerByte", (.gogoproto.moretags) = "yaml:\"tx_size_cost_per_byte\""];</code>
     * @return int|string
     */
    public function getTxSizeCostPerByte()
    {
        return $this->tx_size_cost_per_byte;
    }

    /**
     * Generated from protobuf field <code>uint64 tx_size_cost_per_byte = 3 [json_name = "txSizeCostPerByte", (.gogoproto.moretags) = "yaml:\"tx_size_cost_per_byte\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTxSizeCostPerByte($var)
    {
        GPBUtil::checkUint64($var);
        $this->tx_size_cost_per_byte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 sig_verify_cost_ed25519 = 4 [json_name = "sigVerifyCostEd25519", (.gogoproto.customname) = "SigVerifyCostED25519", (.gogoproto.moretags) = "yaml:\"sig_verify_cost_ed25519\""];</code>
     * @return int|string
     */
    public function getSigVerifyCostEd25519()
    {
        return $this->sig_verify_cost_ed25519;
    }

    /**
     * Generated from protobuf field <code>uint64 sig_verify_cost_ed25519 = 4 [json_name = "sigVerifyCostEd25519", (.gogoproto.customname) = "SigVerifyCostED25519", (.gogoproto.moretags) = "yaml:\"sig_verify_cost_ed25519\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSigVerifyCostEd25519($var)
    {
        GPBUtil::checkUint64($var);
        $this->sig_verify_cost_ed25519 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 sig_verify_cost_secp256k1 = 5 [json_name = "sigVerifyCostSecp256k1", (.gogoproto.customname) = "SigVerifyCostSecp256k1", (.gogoproto.moretags) = "yaml:\"sig_verify_cost_secp256k1\""];</code>
     * @return int|string
     */
    public function getSigVerifyCostSecp256K1()
    {
        return $this->sig_verify_cost_secp256k1;
    }

    /**
     * Generated from protobuf field <code>uint64 sig_verify_cost_secp256k1 = 5 [json_name = "sigVerifyCostSecp256k1", (.gogoproto.customname) = "SigVerifyCostSecp256k1", (.gogoproto.moretags) = "yaml:\"sig_verify_cost_secp256k1\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSigVerifyCostSecp256K1($var)
    {
        GPBUtil::checkUint64($var);
        $this->sig_verify_cost_secp256k1 = $var;

        return $this;
    }

}
