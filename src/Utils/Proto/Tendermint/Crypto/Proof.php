<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/crypto/proof.proto

namespace Tendermint\Crypto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.crypto.Proof</code>
 */
class Proof extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 total = 1 [json_name = "total"];</code>
     */
    protected $total = 0;
    /**
     * Generated from protobuf field <code>int64 index = 2 [json_name = "index"];</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>bytes leaf_hash = 3 [json_name = "leafHash"];</code>
     */
    protected $leaf_hash = '';
    /**
     * Generated from protobuf field <code>repeated bytes aunts = 4 [json_name = "aunts"];</code>
     */
    private $aunts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $total
     *     @type int|string $index
     *     @type string $leaf_hash
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $aunts
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Crypto\GPBMetadata\Proof::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 total = 1 [json_name = "total"];</code>
     * @return int|string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Generated from protobuf field <code>int64 total = 1 [json_name = "total"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkInt64($var);
        $this->total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 index = 2 [json_name = "index"];</code>
     * @return int|string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>int64 index = 2 [json_name = "index"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt64($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes leaf_hash = 3 [json_name = "leafHash"];</code>
     * @return string
     */
    public function getLeafHash()
    {
        return $this->leaf_hash;
    }

    /**
     * Generated from protobuf field <code>bytes leaf_hash = 3 [json_name = "leafHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setLeafHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->leaf_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes aunts = 4 [json_name = "aunts"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAunts()
    {
        return $this->aunts;
    }

    /**
     * Generated from protobuf field <code>repeated bytes aunts = 4 [json_name = "aunts"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAunts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->aunts = $arr;

        return $this;
    }

}
