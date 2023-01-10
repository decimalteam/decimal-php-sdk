<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proofs.proto

namespace Ics23;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *BatchProof is a group of multiple proof types than can be compressed
 *
 * Generated from protobuf message <code>ics23.BatchProof</code>
 */
class BatchProof extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .ics23.BatchEntry entries = 1 [json_name = "entries"];</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ics23\BatchEntry[]|\Google\Protobuf\Internal\RepeatedField $entries
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proofs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .ics23.BatchEntry entries = 1 [json_name = "entries"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Generated from protobuf field <code>repeated .ics23.BatchEntry entries = 1 [json_name = "entries"];</code>
     * @param \Ics23\BatchEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ics23\BatchEntry::class);
        $this->entries = $arr;

        return $this;
    }

}

