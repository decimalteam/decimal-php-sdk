<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/types/evidence.proto

namespace Tendermint\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.types.EvidenceList</code>
 */
class EvidenceList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .tendermint.types.Evidence evidence = 1 [json_name = "evidence", (.gogoproto.nullable) = false];</code>
     */
    private $evidence;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Tendermint\Types\Evidence>|\Google\Protobuf\Internal\RepeatedField $evidence
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Types\GPBMetadata\Evidence::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .tendermint.types.Evidence evidence = 1 [json_name = "evidence", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Generated from protobuf field <code>repeated .tendermint.types.Evidence evidence = 1 [json_name = "evidence", (.gogoproto.nullable) = false];</code>
     * @param array<\Tendermint\Types\Evidence>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvidence($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tendermint\Types\Evidence::class);
        $this->evidence = $arr;

        return $this;
    }

}

