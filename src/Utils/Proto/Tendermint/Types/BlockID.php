<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/types/types.proto

namespace Tendermint\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BlockID
 *
 * Generated from protobuf message <code>tendermint.types.BlockID</code>
 */
class BlockID extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes hash = 1 [json_name = "hash"];</code>
     */
    protected $hash = '';
    /**
     * Generated from protobuf field <code>.tendermint.types.PartSetHeader part_set_header = 2 [json_name = "partSetHeader", (.gogoproto.nullable) = false];</code>
     */
    protected $part_set_header = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *     @type \Tendermint\Types\PartSetHeader $part_set_header
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Types\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes hash = 1 [json_name = "hash"];</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 1 [json_name = "hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.PartSetHeader part_set_header = 2 [json_name = "partSetHeader", (.gogoproto.nullable) = false];</code>
     * @return \Tendermint\Types\PartSetHeader|null
     */
    public function getPartSetHeader()
    {
        return $this->part_set_header;
    }

    public function hasPartSetHeader()
    {
        return isset($this->part_set_header);
    }

    public function clearPartSetHeader()
    {
        unset($this->part_set_header);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.PartSetHeader part_set_header = 2 [json_name = "partSetHeader", (.gogoproto.nullable) = false];</code>
     * @param \Tendermint\Types\PartSetHeader $var
     * @return $this
     */
    public function setPartSetHeader($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Types\PartSetHeader::class);
        $this->part_set_header = $var;

        return $this;
    }

}

