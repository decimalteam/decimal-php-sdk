<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/tx.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DynamicFeeTx is the data of EIP-1559 dinamic fee transactions.
 *
 * Generated from protobuf message <code>ethermint.evm.v1.DynamicFeeTx</code>
 */
class DynamicFeeTx extends \Google\Protobuf\Internal\Message
{
    /**
     * destination EVM chain ID
     *
     * Generated from protobuf field <code>string chain_id = 1 [json_name = "chainId", (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int", (.gogoproto.customname) = "ChainID", (.gogoproto.jsontag) = "chainID"];</code>
     */
    protected $chain_id = '';
    /**
     * nonce corresponds to the account nonce (transaction sequence).
     *
     * Generated from protobuf field <code>uint64 nonce = 2 [json_name = "nonce"];</code>
     */
    protected $nonce = 0;
    /**
     * gas tip cap defines the max value for the gas tip
     *
     * Generated from protobuf field <code>string gas_tip_cap = 3 [json_name = "gasTipCap", (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int"];</code>
     */
    protected $gas_tip_cap = '';
    /**
     * gas fee cap defines the max value for the gas fee
     *
     * Generated from protobuf field <code>string gas_fee_cap = 4 [json_name = "gasFeeCap", (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int"];</code>
     */
    protected $gas_fee_cap = '';
    /**
     * gas defines the gas limit defined for the transaction.
     *
     * Generated from protobuf field <code>uint64 gas = 5 [json_name = "gas", (.gogoproto.customname) = "GasLimit"];</code>
     */
    protected $gas = 0;
    /**
     * hex formatted address of the recipient
     *
     * Generated from protobuf field <code>string to = 6 [json_name = "to"];</code>
     */
    protected $to = '';
    /**
     * value defines the the transaction amount.
     *
     * Generated from protobuf field <code>string value = 7 [json_name = "value", (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int", (.gogoproto.customname) = "Amount"];</code>
     */
    protected $value = '';
    /**
     * input defines the data payload bytes of the transaction.
     *
     * Generated from protobuf field <code>bytes data = 8 [json_name = "data"];</code>
     */
    protected $data = '';
    /**
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.AccessTuple accesses = 9 [json_name = "accesses", (.gogoproto.nullable) = false, (.gogoproto.jsontag) = "accessList", (.gogoproto.castrepeated) = "AccessList"];</code>
     */
    private $accesses;
    /**
     * v defines the signature value
     *
     * Generated from protobuf field <code>bytes v = 10 [json_name = "v"];</code>
     */
    protected $v = '';
    /**
     * r defines the signature value
     *
     * Generated from protobuf field <code>bytes r = 11 [json_name = "r"];</code>
     */
    protected $r = '';
    /**
     * s define the signature value
     *
     * Generated from protobuf field <code>bytes s = 12 [json_name = "s"];</code>
     */
    protected $s = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $chain_id
     *           destination EVM chain ID
     *     @type int|string $nonce
     *           nonce corresponds to the account nonce (transaction sequence).
     *     @type string $gas_tip_cap
     *           gas tip cap defines the max value for the gas tip
     *     @type string $gas_fee_cap
     *           gas fee cap defines the max value for the gas fee
     *     @type int|string $gas
     *           gas defines the gas limit defined for the transaction.
     *     @type string $to
     *           hex formatted address of the recipient
     *     @type string $value
     *           value defines the the transaction amount.
     *     @type string $data
     *           input defines the data payload bytes of the transaction.
     *     @type \Ethermint\Evm\V1\AccessTuple[]|\Google\Protobuf\Internal\RepeatedField $accesses
     *     @type string $v
     *           v defines the signature value
     *     @type string $r
     *           r defines the signature value
     *     @type string $s
     *           s define the signature value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * destination EVM chain ID
     *
     * Generated from protobuf field <code>string chain_id = 1 [json_name = "chainId", (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int", (.gogoproto.customname) = "ChainID", (.gogoproto.jsontag) = "chainID"];</code>
     * @return string
     */
    public function getChainId()
    {
        return $this->chain_id;
    }

    /**
     * destination EVM chain ID
     *
     * Generated from protobuf field <code>string chain_id = 1 [json_name = "chainId", (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int", (.gogoproto.customname) = "ChainID", (.gogoproto.jsontag) = "chainID"];</code>
     * @param string $var
     * @return $this
     */
    public function setChainId($var)
    {
        GPBUtil::checkString($var, True);
        $this->chain_id = $var;

        return $this;
    }

    /**
     * nonce corresponds to the account nonce (transaction sequence).
     *
     * Generated from protobuf field <code>uint64 nonce = 2 [json_name = "nonce"];</code>
     * @return int|string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * nonce corresponds to the account nonce (transaction sequence).
     *
     * Generated from protobuf field <code>uint64 nonce = 2 [json_name = "nonce"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkUint64($var);
        $this->nonce = $var;

        return $this;
    }

    /**
     * gas tip cap defines the max value for the gas tip
     *
     * Generated from protobuf field <code>string gas_tip_cap = 3 [json_name = "gasTipCap", (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int"];</code>
     * @return string
     */
    public function getGasTipCap()
    {
        return $this->gas_tip_cap;
    }

    /**
     * gas tip cap defines the max value for the gas tip
     *
     * Generated from protobuf field <code>string gas_tip_cap = 3 [json_name = "gasTipCap", (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setGasTipCap($var)
    {
        GPBUtil::checkString($var, True);
        $this->gas_tip_cap = $var;

        return $this;
    }

    /**
     * gas fee cap defines the max value for the gas fee
     *
     * Generated from protobuf field <code>string gas_fee_cap = 4 [json_name = "gasFeeCap", (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int"];</code>
     * @return string
     */
    public function getGasFeeCap()
    {
        return $this->gas_fee_cap;
    }

    /**
     * gas fee cap defines the max value for the gas fee
     *
     * Generated from protobuf field <code>string gas_fee_cap = 4 [json_name = "gasFeeCap", (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setGasFeeCap($var)
    {
        GPBUtil::checkString($var, True);
        $this->gas_fee_cap = $var;

        return $this;
    }

    /**
     * gas defines the gas limit defined for the transaction.
     *
     * Generated from protobuf field <code>uint64 gas = 5 [json_name = "gas", (.gogoproto.customname) = "GasLimit"];</code>
     * @return int|string
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * gas defines the gas limit defined for the transaction.
     *
     * Generated from protobuf field <code>uint64 gas = 5 [json_name = "gas", (.gogoproto.customname) = "GasLimit"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setGas($var)
    {
        GPBUtil::checkUint64($var);
        $this->gas = $var;

        return $this;
    }

    /**
     * hex formatted address of the recipient
     *
     * Generated from protobuf field <code>string to = 6 [json_name = "to"];</code>
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * hex formatted address of the recipient
     *
     * Generated from protobuf field <code>string to = 6 [json_name = "to"];</code>
     * @param string $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkString($var, True);
        $this->to = $var;

        return $this;
    }

    /**
     * value defines the the transaction amount.
     *
     * Generated from protobuf field <code>string value = 7 [json_name = "value", (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int", (.gogoproto.customname) = "Amount"];</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * value defines the the transaction amount.
     *
     * Generated from protobuf field <code>string value = 7 [json_name = "value", (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int", (.gogoproto.customname) = "Amount"];</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * input defines the data payload bytes of the transaction.
     *
     * Generated from protobuf field <code>bytes data = 8 [json_name = "data"];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * input defines the data payload bytes of the transaction.
     *
     * Generated from protobuf field <code>bytes data = 8 [json_name = "data"];</code>
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
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.AccessTuple accesses = 9 [json_name = "accesses", (.gogoproto.nullable) = false, (.gogoproto.jsontag) = "accessList", (.gogoproto.castrepeated) = "AccessList"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccesses()
    {
        return $this->accesses;
    }

    /**
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.AccessTuple accesses = 9 [json_name = "accesses", (.gogoproto.nullable) = false, (.gogoproto.jsontag) = "accessList", (.gogoproto.castrepeated) = "AccessList"];</code>
     * @param \Ethermint\Evm\V1\AccessTuple[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccesses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ethermint\Evm\V1\AccessTuple::class);
        $this->accesses = $arr;

        return $this;
    }

    /**
     * v defines the signature value
     *
     * Generated from protobuf field <code>bytes v = 10 [json_name = "v"];</code>
     * @return string
     */
    public function getV()
    {
        return $this->v;
    }

    /**
     * v defines the signature value
     *
     * Generated from protobuf field <code>bytes v = 10 [json_name = "v"];</code>
     * @param string $var
     * @return $this
     */
    public function setV($var)
    {
        GPBUtil::checkString($var, False);
        $this->v = $var;

        return $this;
    }

    /**
     * r defines the signature value
     *
     * Generated from protobuf field <code>bytes r = 11 [json_name = "r"];</code>
     * @return string
     */
    public function getR()
    {
        return $this->r;
    }

    /**
     * r defines the signature value
     *
     * Generated from protobuf field <code>bytes r = 11 [json_name = "r"];</code>
     * @param string $var
     * @return $this
     */
    public function setR($var)
    {
        GPBUtil::checkString($var, False);
        $this->r = $var;

        return $this;
    }

    /**
     * s define the signature value
     *
     * Generated from protobuf field <code>bytes s = 12 [json_name = "s"];</code>
     * @return string
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * s define the signature value
     *
     * Generated from protobuf field <code>bytes s = 12 [json_name = "s"];</code>
     * @param string $var
     * @return $this
     */
    public function setS($var)
    {
        GPBUtil::checkString($var, False);
        $this->s = $var;

        return $this;
    }

}
