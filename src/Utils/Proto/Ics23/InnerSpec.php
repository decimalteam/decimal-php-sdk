<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proofs.proto

namespace Ics23;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *InnerSpec contains all store-specific structure info to determine if two proofs from a
 *given store are neighbors.
 *This enables:
 * isLeftMost(spec: InnerSpec, op: InnerOp)
 * isRightMost(spec: InnerSpec, op: InnerOp)
 * isLeftNeighbor(spec: InnerSpec, left: InnerOp, right: InnerOp)
 *
 * Generated from protobuf message <code>ics23.InnerSpec</code>
 */
class InnerSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Child order is the ordering of the children node, must count from 0
     * iavl tree is [0, 1] (left then right)
     * merk is [0, 2, 1] (left, right, here)
     *
     * Generated from protobuf field <code>repeated int32 child_order = 1 [json_name = "childOrder"];</code>
     */
    private $child_order;
    /**
     * Generated from protobuf field <code>int32 child_size = 2 [json_name = "childSize"];</code>
     */
    protected $child_size = 0;
    /**
     * Generated from protobuf field <code>int32 min_prefix_length = 3 [json_name = "minPrefixLength"];</code>
     */
    protected $min_prefix_length = 0;
    /**
     * Generated from protobuf field <code>int32 max_prefix_length = 4 [json_name = "maxPrefixLength"];</code>
     */
    protected $max_prefix_length = 0;
    /**
     * empty child is the prehash image that is used when one child is nil (eg. 20 bytes of 0)
     *
     * Generated from protobuf field <code>bytes empty_child = 5 [json_name = "emptyChild"];</code>
     */
    protected $empty_child = '';
    /**
     * hash is the algorithm that must be used for each InnerOp
     *
     * Generated from protobuf field <code>.ics23.HashOp hash = 6 [json_name = "hash"];</code>
     */
    protected $hash = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $child_order
     *           Child order is the ordering of the children node, must count from 0
     *           iavl tree is [0, 1] (left then right)
     *           merk is [0, 2, 1] (left, right, here)
     *     @type int $child_size
     *     @type int $min_prefix_length
     *     @type int $max_prefix_length
     *     @type string $empty_child
     *           empty child is the prehash image that is used when one child is nil (eg. 20 bytes of 0)
     *     @type int $hash
     *           hash is the algorithm that must be used for each InnerOp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proofs::initOnce();
        parent::__construct($data);
    }

    /**
     * Child order is the ordering of the children node, must count from 0
     * iavl tree is [0, 1] (left then right)
     * merk is [0, 2, 1] (left, right, here)
     *
     * Generated from protobuf field <code>repeated int32 child_order = 1 [json_name = "childOrder"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChildOrder()
    {
        return $this->child_order;
    }

    /**
     * Child order is the ordering of the children node, must count from 0
     * iavl tree is [0, 1] (left then right)
     * merk is [0, 2, 1] (left, right, here)
     *
     * Generated from protobuf field <code>repeated int32 child_order = 1 [json_name = "childOrder"];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChildOrder($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->child_order = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 child_size = 2 [json_name = "childSize"];</code>
     * @return int
     */
    public function getChildSize()
    {
        return $this->child_size;
    }

    /**
     * Generated from protobuf field <code>int32 child_size = 2 [json_name = "childSize"];</code>
     * @param int $var
     * @return $this
     */
    public function setChildSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->child_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 min_prefix_length = 3 [json_name = "minPrefixLength"];</code>
     * @return int
     */
    public function getMinPrefixLength()
    {
        return $this->min_prefix_length;
    }

    /**
     * Generated from protobuf field <code>int32 min_prefix_length = 3 [json_name = "minPrefixLength"];</code>
     * @param int $var
     * @return $this
     */
    public function setMinPrefixLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_prefix_length = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_prefix_length = 4 [json_name = "maxPrefixLength"];</code>
     * @return int
     */
    public function getMaxPrefixLength()
    {
        return $this->max_prefix_length;
    }

    /**
     * Generated from protobuf field <code>int32 max_prefix_length = 4 [json_name = "maxPrefixLength"];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxPrefixLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_prefix_length = $var;

        return $this;
    }

    /**
     * empty child is the prehash image that is used when one child is nil (eg. 20 bytes of 0)
     *
     * Generated from protobuf field <code>bytes empty_child = 5 [json_name = "emptyChild"];</code>
     * @return string
     */
    public function getEmptyChild()
    {
        return $this->empty_child;
    }

    /**
     * empty child is the prehash image that is used when one child is nil (eg. 20 bytes of 0)
     *
     * Generated from protobuf field <code>bytes empty_child = 5 [json_name = "emptyChild"];</code>
     * @param string $var
     * @return $this
     */
    public function setEmptyChild($var)
    {
        GPBUtil::checkString($var, False);
        $this->empty_child = $var;

        return $this;
    }

    /**
     * hash is the algorithm that must be used for each InnerOp
     *
     * Generated from protobuf field <code>.ics23.HashOp hash = 6 [json_name = "hash"];</code>
     * @return int
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * hash is the algorithm that must be used for each InnerOp
     *
     * Generated from protobuf field <code>.ics23.HashOp hash = 6 [json_name = "hash"];</code>
     * @param int $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkEnum($var, \Ics23\HashOp::class);
        $this->hash = $var;

        return $this;
    }

}

