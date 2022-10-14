<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/p2p/types.proto

namespace Tendermint\P2p;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.p2p.NetAddress</code>
 */
class NetAddress extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.gogoproto.customname) = "ID"];</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string ip = 2 [json_name = "ip", (.gogoproto.customname) = "IP"];</code>
     */
    protected $ip = '';
    /**
     * Generated from protobuf field <code>uint32 port = 3 [json_name = "port"];</code>
     */
    protected $port = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $ip
     *     @type int $port
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\P2p\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.gogoproto.customname) = "ID"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.gogoproto.customname) = "ID"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ip = 2 [json_name = "ip", (.gogoproto.customname) = "IP"];</code>
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Generated from protobuf field <code>string ip = 2 [json_name = "ip", (.gogoproto.customname) = "IP"];</code>
     * @param string $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 port = 3 [json_name = "port"];</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Generated from protobuf field <code>uint32 port = 3 [json_name = "port"];</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkUint32($var);
        $this->port = $var;

        return $this;
    }

}

