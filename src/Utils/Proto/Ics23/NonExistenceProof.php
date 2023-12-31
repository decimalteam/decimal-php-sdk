<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proofs.proto

namespace Ics23;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *NonExistenceProof takes a proof of two neighbors, one left of the desired key,
 *one right of the desired key. If both proofs are valid AND they are neighbors,
 *then there is no valid proof for the given key.
 *
 * Generated from protobuf message <code>ics23.NonExistenceProof</code>
 */
class NonExistenceProof extends \Google\Protobuf\Internal\Message
{
    /**
     * TODO: remove this as unnecessary??? we prove a range
     *
     * Generated from protobuf field <code>bytes key = 1 [json_name = "key"];</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>.ics23.ExistenceProof left = 2 [json_name = "left"];</code>
     */
    protected $left = null;
    /**
     * Generated from protobuf field <code>.ics23.ExistenceProof right = 3 [json_name = "right"];</code>
     */
    protected $right = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           TODO: remove this as unnecessary??? we prove a range
     *     @type \Ics23\ExistenceProof $left
     *     @type \Ics23\ExistenceProof $right
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proofs::initOnce();
        parent::__construct($data);
    }

    /**
     * TODO: remove this as unnecessary??? we prove a range
     *
     * Generated from protobuf field <code>bytes key = 1 [json_name = "key"];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * TODO: remove this as unnecessary??? we prove a range
     *
     * Generated from protobuf field <code>bytes key = 1 [json_name = "key"];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ics23.ExistenceProof left = 2 [json_name = "left"];</code>
     * @return \Ics23\ExistenceProof|null
     */
    public function getLeft()
    {
        return $this->left;
    }

    public function hasLeft()
    {
        return isset($this->left);
    }

    public function clearLeft()
    {
        unset($this->left);
    }

    /**
     * Generated from protobuf field <code>.ics23.ExistenceProof left = 2 [json_name = "left"];</code>
     * @param \Ics23\ExistenceProof $var
     * @return $this
     */
    public function setLeft($var)
    {
        GPBUtil::checkMessage($var, \Ics23\ExistenceProof::class);
        $this->left = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ics23.ExistenceProof right = 3 [json_name = "right"];</code>
     * @return \Ics23\ExistenceProof|null
     */
    public function getRight()
    {
        return $this->right;
    }

    public function hasRight()
    {
        return isset($this->right);
    }

    public function clearRight()
    {
        unset($this->right);
    }

    /**
     * Generated from protobuf field <code>.ics23.ExistenceProof right = 3 [json_name = "right"];</code>
     * @param \Ics23\ExistenceProof $var
     * @return $this
     */
    public function setRight($var)
    {
        GPBUtil::checkMessage($var, \Ics23\ExistenceProof::class);
        $this->right = $var;

        return $this;
    }

}

