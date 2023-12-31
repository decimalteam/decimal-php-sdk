<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/tendermint/v1beta1/query.proto

namespace Cosmos\Base\Tendermint\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetLatestBlockResponse is the response type for the Query/GetLatestBlock RPC method.
 *
 * Generated from protobuf message <code>cosmos.base.tendermint.v1beta1.GetLatestBlockResponse</code>
 */
class GetLatestBlockResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.tendermint.types.BlockID block_id = 1 [json_name = "blockId"];</code>
     */
    protected $block_id = null;
    /**
     * Generated from protobuf field <code>.tendermint.types.Block block = 2 [json_name = "block"];</code>
     */
    protected $block = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tendermint\Types\BlockID $block_id
     *     @type \Tendermint\Types\Block $block
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Tendermint\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.BlockID block_id = 1 [json_name = "blockId"];</code>
     * @return \Tendermint\Types\BlockID|null
     */
    public function getBlockId()
    {
        return $this->block_id;
    }

    public function hasBlockId()
    {
        return isset($this->block_id);
    }

    public function clearBlockId()
    {
        unset($this->block_id);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.BlockID block_id = 1 [json_name = "blockId"];</code>
     * @param \Tendermint\Types\BlockID $var
     * @return $this
     */
    public function setBlockId($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Types\BlockID::class);
        $this->block_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.Block block = 2 [json_name = "block"];</code>
     * @return \Tendermint\Types\Block|null
     */
    public function getBlock()
    {
        return $this->block;
    }

    public function hasBlock()
    {
        return isset($this->block);
    }

    public function clearBlock()
    {
        unset($this->block);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.Block block = 2 [json_name = "block"];</code>
     * @param \Tendermint\Types\Block $var
     * @return $this
     */
    public function setBlock($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Types\Block::class);
        $this->block = $var;

        return $this;
    }

}

