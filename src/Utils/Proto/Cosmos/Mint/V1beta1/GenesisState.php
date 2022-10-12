<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/mint/v1beta1/genesis.proto

namespace Cosmos\Mint\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the mint module's genesis state.
 *
 * Generated from protobuf message <code>cosmos.mint.v1beta1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * minter is a space for holding current inflation information.
     *
     * Generated from protobuf field <code>.cosmos.mint.v1beta1.Minter minter = 1 [json_name = "minter", (.gogoproto.nullable) = false];</code>
     */
    protected $minter = null;
    /**
     * params defines all the paramaters of the module.
     *
     * Generated from protobuf field <code>.cosmos.mint.v1beta1.Params params = 2 [json_name = "params", (.gogoproto.nullable) = false];</code>
     */
    protected $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Mint\V1beta1\Minter $minter
     *           minter is a space for holding current inflation information.
     *     @type \Cosmos\Mint\V1beta1\Params $params
     *           params defines all the paramaters of the module.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Mint\V1Beta1\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * minter is a space for holding current inflation information.
     *
     * Generated from protobuf field <code>.cosmos.mint.v1beta1.Minter minter = 1 [json_name = "minter", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Mint\V1beta1\Minter|null
     */
    public function getMinter()
    {
        return $this->minter;
    }

    public function hasMinter()
    {
        return isset($this->minter);
    }

    public function clearMinter()
    {
        unset($this->minter);
    }

    /**
     * minter is a space for holding current inflation information.
     *
     * Generated from protobuf field <code>.cosmos.mint.v1beta1.Minter minter = 1 [json_name = "minter", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Mint\V1beta1\Minter $var
     * @return $this
     */
    public function setMinter($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Mint\V1beta1\Minter::class);
        $this->minter = $var;

        return $this;
    }

    /**
     * params defines all the paramaters of the module.
     *
     * Generated from protobuf field <code>.cosmos.mint.v1beta1.Params params = 2 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Mint\V1beta1\Params|null
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
     * Generated from protobuf field <code>.cosmos.mint.v1beta1.Params params = 2 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Mint\V1beta1\Params $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Mint\V1beta1\Params::class);
        $this->params = $var;

        return $this;
    }

}

