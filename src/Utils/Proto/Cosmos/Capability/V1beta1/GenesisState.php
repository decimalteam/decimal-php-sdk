<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/capability/v1beta1/genesis.proto

namespace Cosmos\Capability\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the capability module's genesis state.
 *
 * Generated from protobuf message <code>cosmos.capability.v1beta1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * index is the capability global index.
     *
     * Generated from protobuf field <code>uint64 index = 1 [json_name = "index"];</code>
     */
    protected $index = 0;
    /**
     * owners represents a map from index to owners of the capability index
     * index key is string to allow amino marshalling.
     *
     * Generated from protobuf field <code>repeated .cosmos.capability.v1beta1.GenesisOwners owners = 2 [json_name = "owners", (.gogoproto.nullable) = false];</code>
     */
    private $owners;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $index
     *           index is the capability global index.
     *     @type array<\Cosmos\Capability\V1beta1\GenesisOwners>|\Google\Protobuf\Internal\RepeatedField $owners
     *           owners represents a map from index to owners of the capability index
     *           index key is string to allow amino marshalling.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Capability\V1beta1\GPBMetadata\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * index is the capability global index.
     *
     * Generated from protobuf field <code>uint64 index = 1 [json_name = "index"];</code>
     * @return int|string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * index is the capability global index.
     *
     * Generated from protobuf field <code>uint64 index = 1 [json_name = "index"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint64($var);
        $this->index = $var;

        return $this;
    }

    /**
     * owners represents a map from index to owners of the capability index
     * index key is string to allow amino marshalling.
     *
     * Generated from protobuf field <code>repeated .cosmos.capability.v1beta1.GenesisOwners owners = 2 [json_name = "owners", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOwners()
    {
        return $this->owners;
    }

    /**
     * owners represents a map from index to owners of the capability index
     * index key is string to allow amino marshalling.
     *
     * Generated from protobuf field <code>repeated .cosmos.capability.v1beta1.GenesisOwners owners = 2 [json_name = "owners", (.gogoproto.nullable) = false];</code>
     * @param array<\Cosmos\Capability\V1beta1\GenesisOwners>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOwners($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Capability\V1beta1\GenesisOwners::class);
        $this->owners = $arr;

        return $this;
    }

}

