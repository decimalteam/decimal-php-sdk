<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/version/types.proto

namespace Tendermint\Version;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * App includes the protocol and software version for the application.
 * This information is included in ResponseInfo. The App.Protocol can be
 * updated in ResponseEndBlock.
 *
 * Generated from protobuf message <code>tendermint.version.App</code>
 */
class App extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 protocol = 1 [json_name = "protocol"];</code>
     */
    protected $protocol = 0;
    /**
     * Generated from protobuf field <code>string software = 2 [json_name = "software"];</code>
     */
    protected $software = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $protocol
     *     @type string $software
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Version\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 protocol = 1 [json_name = "protocol"];</code>
     * @return int|string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Generated from protobuf field <code>uint64 protocol = 1 [json_name = "protocol"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setProtocol($var)
    {
        GPBUtil::checkUint64($var);
        $this->protocol = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string software = 2 [json_name = "software"];</code>
     * @return string
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Generated from protobuf field <code>string software = 2 [json_name = "software"];</code>
     * @param string $var
     * @return $this
     */
    public function setSoftware($var)
    {
        GPBUtil::checkString($var, True);
        $this->software = $var;

        return $this;
    }

}
