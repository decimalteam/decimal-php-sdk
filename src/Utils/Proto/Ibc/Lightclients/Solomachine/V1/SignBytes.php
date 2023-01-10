<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/lightclients/solomachine/v1/solomachine.proto

namespace Ibc\Lightclients\Solomachine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SignBytes defines the signed bytes used for signature verification.
 *
 * Generated from protobuf message <code>ibc.lightclients.solomachine.v1.SignBytes</code>
 */
class SignBytes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 sequence = 1 [json_name = "sequence"];</code>
     */
    protected $sequence = 0;
    /**
     * Generated from protobuf field <code>uint64 timestamp = 2 [json_name = "timestamp"];</code>
     */
    protected $timestamp = 0;
    /**
     * Generated from protobuf field <code>string diversifier = 3 [json_name = "diversifier"];</code>
     */
    protected $diversifier = '';
    /**
     * type of the data used
     *
     * Generated from protobuf field <code>.ibc.lightclients.solomachine.v1.DataType data_type = 4 [json_name = "dataType", (.gogoproto.moretags) = "yaml:\"data_type\""];</code>
     */
    protected $data_type = 0;
    /**
     * marshaled data
     *
     * Generated from protobuf field <code>bytes data = 5 [json_name = "data"];</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $sequence
     *     @type int|string $timestamp
     *     @type string $diversifier
     *     @type int $data_type
     *           type of the data used
     *     @type string $data
     *           marshaled data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Lightclients\Solomachine\V1\Solomachine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 sequence = 1 [json_name = "sequence"];</code>
     * @return int|string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Generated from protobuf field <code>uint64 sequence = 1 [json_name = "sequence"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->sequence = $var;

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

    /**
     * Generated from protobuf field <code>string diversifier = 3 [json_name = "diversifier"];</code>
     * @return string
     */
    public function getDiversifier()
    {
        return $this->diversifier;
    }

    /**
     * Generated from protobuf field <code>string diversifier = 3 [json_name = "diversifier"];</code>
     * @param string $var
     * @return $this
     */
    public function setDiversifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->diversifier = $var;

        return $this;
    }

    /**
     * type of the data used
     *
     * Generated from protobuf field <code>.ibc.lightclients.solomachine.v1.DataType data_type = 4 [json_name = "dataType", (.gogoproto.moretags) = "yaml:\"data_type\""];</code>
     * @return int
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * type of the data used
     *
     * Generated from protobuf field <code>.ibc.lightclients.solomachine.v1.DataType data_type = 4 [json_name = "dataType", (.gogoproto.moretags) = "yaml:\"data_type\""];</code>
     * @param int $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkEnum($var, \Ibc\Lightclients\Solomachine\V1\DataType::class);
        $this->data_type = $var;

        return $this;
    }

    /**
     * marshaled data
     *
     * Generated from protobuf field <code>bytes data = 5 [json_name = "data"];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * marshaled data
     *
     * Generated from protobuf field <code>bytes data = 5 [json_name = "data"];</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

