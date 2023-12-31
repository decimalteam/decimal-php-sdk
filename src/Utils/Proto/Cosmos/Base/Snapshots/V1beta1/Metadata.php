<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/snapshots/v1beta1/snapshot.proto

namespace Cosmos\Base\Snapshots\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata contains SDK-specific snapshot metadata.
 *
 * Generated from protobuf message <code>cosmos.base.snapshots.v1beta1.Metadata</code>
 */
class Metadata extends \Google\Protobuf\Internal\Message
{
    /**
     * SHA-256 chunk hashes
     *
     * Generated from protobuf field <code>repeated bytes chunk_hashes = 1 [json_name = "chunkHashes"];</code>
     */
    private $chunk_hashes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $chunk_hashes
     *           SHA-256 chunk hashes
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Snapshots\V1beta1\GPBMetadata\Snapshot::initOnce();
        parent::__construct($data);
    }

    /**
     * SHA-256 chunk hashes
     *
     * Generated from protobuf field <code>repeated bytes chunk_hashes = 1 [json_name = "chunkHashes"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChunkHashes()
    {
        return $this->chunk_hashes;
    }

    /**
     * SHA-256 chunk hashes
     *
     * Generated from protobuf field <code>repeated bytes chunk_hashes = 1 [json_name = "chunkHashes"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChunkHashes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->chunk_hashes = $arr;

        return $this;
    }

}

