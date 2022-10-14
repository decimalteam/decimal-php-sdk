<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/nft/v1/genesis.proto

namespace Decimal\Nft\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the module's genesis state.
 *
 * Generated from protobuf message <code>decimal.nft.v1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * collections defines all existing NFT collections (including tokens and sub-tokens).
     *
     * Generated from protobuf field <code>repeated .decimal.nft.v1.Collection collections = 1 [json_name = "collections", (.gogoproto.nullable) = false];</code>
     */
    private $collections;
    /**
     * params defines all the module's parameters.
     *
     * Generated from protobuf field <code>.decimal.nft.v1.Params params = 2 [json_name = "params", (.gogoproto.nullable) = false];</code>
     */
    protected $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Decimal\Nft\V1\Collection>|\Google\Protobuf\Internal\RepeatedField $collections
     *           collections defines all existing NFT collections (including tokens and sub-tokens).
     *     @type \Decimal\Nft\V1\Params $params
     *           params defines all the module's parameters.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Nft\V1\GPBMetadata\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * collections defines all existing NFT collections (including tokens and sub-tokens).
     *
     * Generated from protobuf field <code>repeated .decimal.nft.v1.Collection collections = 1 [json_name = "collections", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCollections()
    {
        return $this->collections;
    }

    /**
     * collections defines all existing NFT collections (including tokens and sub-tokens).
     *
     * Generated from protobuf field <code>repeated .decimal.nft.v1.Collection collections = 1 [json_name = "collections", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Nft\V1\Collection>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCollections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Nft\V1\Collection::class);
        $this->collections = $arr;

        return $this;
    }

    /**
     * params defines all the module's parameters.
     *
     * Generated from protobuf field <code>.decimal.nft.v1.Params params = 2 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @return \Decimal\Nft\V1\Params|null
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
     * params defines all the module's parameters.
     *
     * Generated from protobuf field <code>.decimal.nft.v1.Params params = 2 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @param \Decimal\Nft\V1\Params $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Decimal\Nft\V1\Params::class);
        $this->params = $var;

        return $this;
    }

}
