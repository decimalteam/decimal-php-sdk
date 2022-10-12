<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/lightclients/solomachine/v2/solomachine.proto

namespace Ibc\Lightclients\Solomachine\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TimestampedSignatureData contains the signature data and the timestamp of the
 * signature.
 *
 * Generated from protobuf message <code>ibc.lightclients.solomachine.v2.TimestampedSignatureData</code>
 */
class TimestampedSignatureData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes signature_data = 1 [json_name = "signatureData", (.gogoproto.moretags) = "yaml:\"signature_data\""];</code>
     */
    protected $signature_data = '';
    /**
     * Generated from protobuf field <code>uint64 timestamp = 2 [json_name = "timestamp"];</code>
     */
    protected $timestamp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $signature_data
     *     @type int|string $timestamp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Lightclients\Solomachine\V2\Solomachine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes signature_data = 1 [json_name = "signatureData", (.gogoproto.moretags) = "yaml:\"signature_data\""];</code>
     * @return string
     */
    public function getSignatureData()
    {
        return $this->signature_data;
    }

    /**
     * Generated from protobuf field <code>bytes signature_data = 1 [json_name = "signatureData", (.gogoproto.moretags) = "yaml:\"signature_data\""];</code>
     * @param string $var
     * @return $this
     */
    public function setSignatureData($var)
    {
        GPBUtil::checkString($var, False);
        $this->signature_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 timestamp = 2 [json_name = "timestamp"];</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>uint64 timestamp = 2 [json_name = "timestamp"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp = $var;

        return $this;
    }

}

