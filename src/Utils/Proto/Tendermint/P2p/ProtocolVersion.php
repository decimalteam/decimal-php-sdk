<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/p2p/types.proto

namespace Tendermint\P2p;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.p2p.ProtocolVersion</code>
 */
class ProtocolVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 p2p = 1 [json_name = "p2p", (.gogoproto.customname) = "P2P"];</code>
     */
    protected $p2p = 0;
    /**
     * Generated from protobuf field <code>uint64 block = 2 [json_name = "block"];</code>
     */
    protected $block = 0;
    /**
     * Generated from protobuf field <code>uint64 app = 3 [json_name = "app"];</code>
     */
    protected $app = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $p2p
     *     @type int|string $block
     *     @type int|string $app
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\P2p\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 p2p = 1 [json_name = "p2p", (.gogoproto.customname) = "P2P"];</code>
     * @return int|string
     */
    public function getP2P()
    {
        return $this->p2p;
    }

    /**
     * Generated from protobuf field <code>uint64 p2p = 1 [json_name = "p2p", (.gogoproto.customname) = "P2P"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setP2P($var)
    {
        GPBUtil::checkUint64($var);
        $this->p2p = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 block = 2 [json_name = "block"];</code>
     * @return int|string
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Generated from protobuf field <code>uint64 block = 2 [json_name = "block"];</code>
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
     * Generated from protobuf field <code>uint64 app = 3 [json_name = "app"];</code>
     * @return int|string
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Generated from protobuf field <code>uint64 app = 3 [json_name = "app"];</code>
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
