<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/feemarket/v1/feemarket.proto

namespace Ethermint\Feemarket\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Params defines the EVM module parameters
 *
 * Generated from protobuf message <code>ethermint.feemarket.v1.Params</code>
 */
class Params extends \Google\Protobuf\Internal\Message
{
    /**
     * no base fee forces the EIP-1559 base fee to 0 (needed for 0 price calls)
     *
     * Generated from protobuf field <code>bool no_base_fee = 1 [json_name = "noBaseFee"];</code>
     */
    protected $no_base_fee = false;
    /**
     * base fee change denominator bounds the amount the base fee can change
     * between blocks.
     *
     * Generated from protobuf field <code>uint32 base_fee_change_denominator = 2 [json_name = "baseFeeChangeDenominator"];</code>
     */
    protected $base_fee_change_denominator = 0;
    /**
     * elasticity multiplier bounds the maximum gas limit an EIP-1559 block may
     * have.
     *
     * Generated from protobuf field <code>uint32 elasticity_multiplier = 3 [json_name = "elasticityMultiplier"];</code>
     */
    protected $elasticity_multiplier = 0;
    /**
     * height at which the base fee calculation is enabled.
     *
     * Generated from protobuf field <code>int64 enable_height = 5 [json_name = "enableHeight"];</code>
     */
    protected $enable_height = 0;
    /**
     * base fee for EIP-1559 blocks.
     *
     * Generated from protobuf field <code>string base_fee = 6 [json_name = "baseFee", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int"];</code>
     */
    protected $base_fee = '';
    /**
     * min_gas_price defines the minimum gas price value for cosmos and eth transactions
     *
     * Generated from protobuf field <code>string min_gas_price = 7 [json_name = "minGasPrice", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec"];</code>
     */
    protected $min_gas_price = '';
    /**
     * min gas denominator bounds the minimum gasUsed to be charged
     * to senders based on GasLimit
     *
     * Generated from protobuf field <code>string min_gas_multiplier = 8 [json_name = "minGasMultiplier", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec"];</code>
     */
    protected $min_gas_multiplier = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $no_base_fee
     *           no base fee forces the EIP-1559 base fee to 0 (needed for 0 price calls)
     *     @type int $base_fee_change_denominator
     *           base fee change denominator bounds the amount the base fee can change
     *           between blocks.
     *     @type int $elasticity_multiplier
     *           elasticity multiplier bounds the maximum gas limit an EIP-1559 block may
     *           have.
     *     @type int|string $enable_height
     *           height at which the base fee calculation is enabled.
     *     @type string $base_fee
     *           base fee for EIP-1559 blocks.
     *     @type string $min_gas_price
     *           min_gas_price defines the minimum gas price value for cosmos and eth transactions
     *     @type string $min_gas_multiplier
     *           min gas denominator bounds the minimum gasUsed to be charged
     *           to senders based on GasLimit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Feemarket\V1\Feemarket::initOnce();
        parent::__construct($data);
    }

    /**
     * no base fee forces the EIP-1559 base fee to 0 (needed for 0 price calls)
     *
     * Generated from protobuf field <code>bool no_base_fee = 1 [json_name = "noBaseFee"];</code>
     * @return bool
     */
    public function getNoBaseFee()
    {
        return $this->no_base_fee;
    }

    /**
     * no base fee forces the EIP-1559 base fee to 0 (needed for 0 price calls)
     *
     * Generated from protobuf field <code>bool no_base_fee = 1 [json_name = "noBaseFee"];</code>
     * @param bool $var
     * @return $this
     */
    public function setNoBaseFee($var)
    {
        GPBUtil::checkBool($var);
        $this->no_base_fee = $var;

        return $this;
    }

    /**
     * base fee change denominator bounds the amount the base fee can change
     * between blocks.
     *
     * Generated from protobuf field <code>uint32 base_fee_change_denominator = 2 [json_name = "baseFeeChangeDenominator"];</code>
     * @return int
     */
    public function getBaseFeeChangeDenominator()
    {
        return $this->base_fee_change_denominator;
    }

    /**
     * base fee change denominator bounds the amount the base fee can change
     * between blocks.
     *
     * Generated from protobuf field <code>uint32 base_fee_change_denominator = 2 [json_name = "baseFeeChangeDenominator"];</code>
     * @param int $var
     * @return $this
     */
    public function setBaseFeeChangeDenominator($var)
    {
        GPBUtil::checkUint32($var);
        $this->base_fee_change_denominator = $var;

        return $this;
    }

    /**
     * elasticity multiplier bounds the maximum gas limit an EIP-1559 block may
     * have.
     *
     * Generated from protobuf field <code>uint32 elasticity_multiplier = 3 [json_name = "elasticityMultiplier"];</code>
     * @return int
     */
    public function getElasticityMultiplier()
    {
        return $this->elasticity_multiplier;
    }

    /**
     * elasticity multiplier bounds the maximum gas limit an EIP-1559 block may
     * have.
     *
     * Generated from protobuf field <code>uint32 elasticity_multiplier = 3 [json_name = "elasticityMultiplier"];</code>
     * @param int $var
     * @return $this
     */
    public function setElasticityMultiplier($var)
    {
        GPBUtil::checkUint32($var);
        $this->elasticity_multiplier = $var;

        return $this;
    }

    /**
     * height at which the base fee calculation is enabled.
     *
     * Generated from protobuf field <code>int64 enable_height = 5 [json_name = "enableHeight"];</code>
     * @return int|string
     */
    public function getEnableHeight()
    {
        return $this->enable_height;
    }

    /**
     * height at which the base fee calculation is enabled.
     *
     * Generated from protobuf field <code>int64 enable_height = 5 [json_name = "enableHeight"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setEnableHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->enable_height = $var;

        return $this;
    }

    /**
     * base fee for EIP-1559 blocks.
     *
     * Generated from protobuf field <code>string base_fee = 6 [json_name = "baseFee", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int"];</code>
     * @return string
     */
    public function getBaseFee()
    {
        return $this->base_fee;
    }

    /**
     * base fee for EIP-1559 blocks.
     *
     * Generated from protobuf field <code>string base_fee = 6 [json_name = "baseFee", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setBaseFee($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_fee = $var;

        return $this;
    }

    /**
     * min_gas_price defines the minimum gas price value for cosmos and eth transactions
     *
     * Generated from protobuf field <code>string min_gas_price = 7 [json_name = "minGasPrice", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec"];</code>
     * @return string
     */
    public function getMinGasPrice()
    {
        return $this->min_gas_price;
    }

    /**
     * min_gas_price defines the minimum gas price value for cosmos and eth transactions
     *
     * Generated from protobuf field <code>string min_gas_price = 7 [json_name = "minGasPrice", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec"];</code>
     * @param string $var
     * @return $this
     */
    public function setMinGasPrice($var)
    {
        GPBUtil::checkString($var, True);
        $this->min_gas_price = $var;

        return $this;
    }

    /**
     * min gas denominator bounds the minimum gasUsed to be charged
     * to senders based on GasLimit
     *
     * Generated from protobuf field <code>string min_gas_multiplier = 8 [json_name = "minGasMultiplier", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec"];</code>
     * @return string
     */
    public function getMinGasMultiplier()
    {
        return $this->min_gas_multiplier;
    }

    /**
     * min gas denominator bounds the minimum gasUsed to be charged
     * to senders based on GasLimit
     *
     * Generated from protobuf field <code>string min_gas_multiplier = 8 [json_name = "minGasMultiplier", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec"];</code>
     * @param string $var
     * @return $this
     */
    public function setMinGasMultiplier($var)
    {
        GPBUtil::checkString($var, True);
        $this->min_gas_multiplier = $var;

        return $this;
    }

}

