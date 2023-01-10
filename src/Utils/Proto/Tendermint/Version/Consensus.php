<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/version/types.proto

namespace Tendermint\Version;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Consensus captures the consensus rules for processing a block in the blockchain,
 * including all blockchain data structures and the rules of the application's
 * state transition machine.
 *
 * Generated from protobuf message <code>tendermint.version.Consensus</code>
 */
class Consensus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 block = 1 [json_name = "block"];</code>
     */
    protected $block = 0;
    /**
     * Generated from protobuf field <code>uint64 app = 2 [json_name = "app"];</code>
     */
    protected $app = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $block
     *     @type int|string $app
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Version\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 block = 1 [json_name = "block"];</code>
     * @return int|string
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Generated from protobuf field <code>uint64 block = 1 [json_name = "block"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBlock($var)
    {
        GPBUtil::checkUint64($var);
        $this->block = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 app = 2 [json_name = "app"];</code>
     * @return int|string
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Generated from protobuf field <code>uint64 app = 2 [json_name = "app"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setApp($var)
    {
        GPBUtil::checkUint64($var);
        $this->app = $var;

        return $this;
    }

}

