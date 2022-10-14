<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/libs/bits/types.proto

namespace Tendermint\Libs\Bits;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.libs.bits.BitArray</code>
 */
class BitArray extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 bits = 1 [json_name = "bits"];</code>
     */
    protected $bits = 0;
    /**
     * Generated from protobuf field <code>repeated uint64 elems = 2 [json_name = "elems"];</code>
     */
    private $elems;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $bits
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $elems
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Libs\Bits\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 bits = 1 [json_name = "bits"];</code>
     * @return int|string
     */
    public function getBits()
    {
        return $this->bits;
    }

    /**
     * Generated from protobuf field <code>int64 bits = 1 [json_name = "bits"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBits($var)
    {
        GPBUtil::checkInt64($var);
        $this->bits = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 elems = 2 [json_name = "elems"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getElems()
    {
        return $this->elems;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 elems = 2 [json_name = "elems"];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setElems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->elems = $arr;

        return $this;
    }

}

