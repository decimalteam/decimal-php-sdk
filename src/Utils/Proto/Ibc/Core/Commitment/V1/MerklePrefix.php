<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/commitment/v1/commitment.proto

namespace Ibc\Core\Commitment\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MerklePrefix is merkle path prefixed to the key.
 * The constructed key from the Path and the key will be append(Path.KeyPath,
 * append(Path.KeyPrefix, key...))
 *
 * Generated from protobuf message <code>ibc.core.commitment.v1.MerklePrefix</code>
 */
class MerklePrefix extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes key_prefix = 1 [json_name = "keyPrefix", (.gogoproto.moretags) = "yaml:\"key_prefix\""];</code>
     */
    protected $key_prefix = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key_prefix
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Commitment\V1\Commitment::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes key_prefix = 1 [json_name = "keyPrefix", (.gogoproto.moretags) = "yaml:\"key_prefix\""];</code>
     * @return string
     */
    public function getKeyPrefix()
    {
        return $this->key_prefix;
    }

    /**
     * Generated from protobuf field <code>bytes key_prefix = 1 [json_name = "keyPrefix", (.gogoproto.moretags) = "yaml:\"key_prefix\""];</code>
     * @param string $var
     * @return $this
     */
    public function setKeyPrefix($var)
    {
        GPBUtil::checkString($var, False);
        $this->key_prefix = $var;

        return $this;
    }

}

