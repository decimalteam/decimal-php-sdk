<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/crypto/multisig/v1beta1/multisig.proto

namespace Cosmos\Crypto\Multisig\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CompactBitArray is an implementation of a space efficient bit array.
 * This is used to ensure that the encoded data takes up a minimal amount of
 * space after proto encoding.
 * This is not thread safe, and is not intended for concurrent usage.
 *
 * Generated from protobuf message <code>cosmos.crypto.multisig.v1beta1.CompactBitArray</code>
 */
class CompactBitArray extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 extra_bits_stored = 1 [json_name = "extraBitsStored"];</code>
     */
    protected $extra_bits_stored = 0;
    /**
     * Generated from protobuf field <code>bytes elems = 2 [json_name = "elems"];</code>
     */
    protected $elems = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $extra_bits_stored
     *     @type string $elems
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Crypto\Multisig\V1Beta1\Multisig::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 extra_bits_stored = 1 [json_name = "extraBitsStored"];</code>
     * @return int
     */
    public function getExtraBitsStored()
    {
        return $this->extra_bits_stored;
    }

    /**
     * Generated from protobuf field <code>uint32 extra_bits_stored = 1 [json_name = "extraBitsStored"];</code>
     * @param int $var
     * @return $this
     */
    public function setExtraBitsStored($var)
    {
        GPBUtil::checkUint32($var);
        $this->extra_bits_stored = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes elems = 2 [json_name = "elems"];</code>
     * @return string
     */
    public function getElems()
    {
        return $this->elems;
    }

    /**
     * Generated from protobuf field <code>bytes elems = 2 [json_name = "elems"];</code>
     * @param string $var
     * @return $this
     */
    public function setElems($var)
    {
        GPBUtil::checkString($var, False);
        $this->elems = $var;

        return $this;
    }

}

