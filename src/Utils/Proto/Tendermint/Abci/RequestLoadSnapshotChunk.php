<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * loads a snapshot chunk
 *
 * Generated from protobuf message <code>tendermint.abci.RequestLoadSnapshotChunk</code>
 */
class RequestLoadSnapshotChunk extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 height = 1 [json_name = "height"];</code>
     */
    protected $height = 0;
    /**
     * Generated from protobuf field <code>uint32 format = 2 [json_name = "format"];</code>
     */
    protected $format = 0;
    /**
     * Generated from protobuf field <code>uint32 chunk = 3 [json_name = "chunk"];</code>
     */
    protected $chunk = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $height
     *     @type int $format
     *     @type int $chunk
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Abci\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 height = 1 [json_name = "height"];</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>uint64 height = 1 [json_name = "height"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkUint64($var);
        $this->height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 format = 2 [json_name = "format"];</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Generated from protobuf field <code>uint32 format = 2 [json_name = "format"];</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkUint32($var);
        $this->format = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 chunk = 3 [json_name = "chunk"];</code>
     * @return int
     */
    public function getChunk()
    {
        return $this->chunk;
    }

    /**
     * Generated from protobuf field <code>uint32 chunk = 3 [json_name = "chunk"];</code>
     * @param int $var
     * @return $this
     */
    public function setChunk($var)
    {
        GPBUtil::checkUint32($var);
        $this->chunk = $var;

        return $this;
    }

}
