<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/types/types.proto

namespace Tendermint\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PartsetHeader
 *
 * Generated from protobuf message <code>tendermint.types.PartSetHeader</code>
 */
class PartSetHeader extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 total = 1 [json_name = "total"];</code>
     */
    protected $total = 0;
    /**
     * Generated from protobuf field <code>bytes hash = 2 [json_name = "hash"];</code>
     */
    protected $hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total
     *     @type string $hash
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Types\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 total = 1 [json_name = "total"];</code>
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Generated from protobuf field <code>uint32 total = 1 [json_name = "total"];</code>
     * @param int $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkUint32($var);
        $this->total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 2 [json_name = "hash"];</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 2 [json_name = "hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

}

