<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/feemarket/v1/genesis.proto

namespace Ethermint\Feemarket\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the feemarket module's genesis state.
 *
 * Generated from protobuf message <code>ethermint.feemarket.v1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * params defines all the paramaters of the module.
     *
     * Generated from protobuf field <code>.ethermint.feemarket.v1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     */
    protected $params = null;
    /**
     * block gas is the amount of gas wanted on the last block before the upgrade.
     * Zero by default.
     *
     * Generated from protobuf field <code>uint64 block_gas = 3 [json_name = "blockGas"];</code>
     */
    protected $block_gas = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ethermint\Feemarket\V1\Params $params
     *           params defines all the paramaters of the module.
     *     @type int|string $block_gas
     *           block gas is the amount of gas wanted on the last block before the upgrade.
     *           Zero by default.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Feemarket\V1\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * params defines all the paramaters of the module.
     *
     * Generated from protobuf field <code>.ethermint.feemarket.v1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @return \Ethermint\Feemarket\V1\Params|null
     */
    public function getParams()
    {
        return $this->params;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * params defines all the paramaters of the module.
     *
     * Generated from protobuf field <code>.ethermint.feemarket.v1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @param \Ethermint\Feemarket\V1\Params $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Ethermint\Feemarket\V1\Params::class);
        $this->params = $var;

        return $this;
    }

    /**
     * block gas is the amount of gas wanted on the last block before the upgrade.
     * Zero by default.
     *
     * Generated from protobuf field <code>uint64 block_gas = 3 [json_name = "blockGas"];</code>
     * @return int|string
     */
    public function getBlockGas()
    {
        return $this->block_gas;
    }

    /**
     * block gas is the amount of gas wanted on the last block before the upgrade.
     * Zero by default.
     *
     * Generated from protobuf field <code>uint64 block_gas = 3 [json_name = "blockGas"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBlockGas($var)
    {
        GPBUtil::checkUint64($var);
        $this->block_gas = $var;

        return $this;
    }

}

