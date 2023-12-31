<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/lightclients/solomachine/v2/solomachine.proto

namespace Ibc\Lightclients\Solomachine\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PacketAcknowledgementData returns the SignBytes data for acknowledgement
 * verification.
 *
 * Generated from protobuf message <code>ibc.lightclients.solomachine.v2.PacketAcknowledgementData</code>
 */
class PacketAcknowledgementData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes path = 1 [json_name = "path"];</code>
     */
    protected $path = '';
    /**
     * Generated from protobuf field <code>bytes acknowledgement = 2 [json_name = "acknowledgement"];</code>
     */
    protected $acknowledgement = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *     @type string $acknowledgement
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Lightclients\Solomachine\V2\Solomachine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes path = 1 [json_name = "path"];</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Generated from protobuf field <code>bytes path = 1 [json_name = "path"];</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, False);
        $this->path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes acknowledgement = 2 [json_name = "acknowledgement"];</code>
     * @return string
     */
    public function getAcknowledgement()
    {
        return $this->acknowledgement;
    }

    /**
     * Generated from protobuf field <code>bytes acknowledgement = 2 [json_name = "acknowledgement"];</code>
     * @param string $var
     * @return $this
     */
    public function setAcknowledgement($var)
    {
        GPBUtil::checkString($var, False);
        $this->acknowledgement = $var;

        return $this;
    }

}

