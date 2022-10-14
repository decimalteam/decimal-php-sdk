<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/p2p/types.proto

namespace Tendermint\P2p;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.p2p.DefaultNodeInfo</code>
 */
class DefaultNodeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.tendermint.p2p.ProtocolVersion protocol_version = 1 [json_name = "protocolVersion", (.gogoproto.nullable) = false];</code>
     */
    protected $protocol_version = null;
    /**
     * Generated from protobuf field <code>string default_node_id = 2 [json_name = "defaultNodeId", (.gogoproto.customname) = "DefaultNodeID"];</code>
     */
    protected $default_node_id = '';
    /**
     * Generated from protobuf field <code>string listen_addr = 3 [json_name = "listenAddr"];</code>
     */
    protected $listen_addr = '';
    /**
     * Generated from protobuf field <code>string network = 4 [json_name = "network"];</code>
     */
    protected $network = '';
    /**
     * Generated from protobuf field <code>string version = 5 [json_name = "version"];</code>
     */
    protected $version = '';
    /**
     * Generated from protobuf field <code>bytes channels = 6 [json_name = "channels"];</code>
     */
    protected $channels = '';
    /**
     * Generated from protobuf field <code>string moniker = 7 [json_name = "moniker"];</code>
     */
    protected $moniker = '';
    /**
     * Generated from protobuf field <code>.tendermint.p2p.DefaultNodeInfoOther other = 8 [json_name = "other", (.gogoproto.nullable) = false];</code>
     */
    protected $other = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tendermint\P2p\ProtocolVersion $protocol_version
     *     @type string $default_node_id
     *     @type string $listen_addr
     *     @type string $network
     *     @type string $version
     *     @type string $channels
     *     @type string $moniker
     *     @type \Tendermint\P2p\DefaultNodeInfoOther $other
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\P2p\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.tendermint.p2p.ProtocolVersion protocol_version = 1 [json_name = "protocolVersion", (.gogoproto.nullable) = false];</code>
     * @return \Tendermint\P2p\ProtocolVersion|null
     */
    public function getProtocolVersion()
    {
        return $this->protocol_version;
    }

    public function hasProtocolVersion()
    {
        return isset($this->protocol_version);
    }

    public function clearProtocolVersion()
    {
        unset($this->protocol_version);
    }

    /**
     * Generated from protobuf field <code>.tendermint.p2p.ProtocolVersion protocol_version = 1 [json_name = "protocolVersion", (.gogoproto.nullable) = false];</code>
     * @param \Tendermint\P2p\ProtocolVersion $var
     * @return $this
     */
    public function setProtocolVersion($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\P2p\ProtocolVersion::class);
        $this->protocol_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_node_id = 2 [json_name = "defaultNodeId", (.gogoproto.customname) = "DefaultNodeID"];</code>
     * @return string
     */
    public function getDefaultNodeId()
    {
        return $this->default_node_id;
    }

    /**
     * Generated from protobuf field <code>string default_node_id = 2 [json_name = "defaultNodeId", (.gogoproto.customname) = "DefaultNodeID"];</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultNodeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_node_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string listen_addr = 3 [json_name = "listenAddr"];</code>
     * @return string
     */
    public function getListenAddr()
    {
        return $this->listen_addr;
    }

    /**
     * Generated from protobuf field <code>string listen_addr = 3 [json_name = "listenAddr"];</code>
     * @param string $var
     * @return $this
     */
    public function setListenAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->listen_addr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string network = 4 [json_name = "network"];</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Generated from protobuf field <code>string network = 4 [json_name = "network"];</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string version = 5 [json_name = "version"];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>string version = 5 [json_name = "version"];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes channels = 6 [json_name = "channels"];</code>
     * @return string
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * Generated from protobuf field <code>bytes channels = 6 [json_name = "channels"];</code>
     * @param string $var
     * @return $this
     */
    public function setChannels($var)
    {
        GPBUtil::checkString($var, False);
        $this->channels = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string moniker = 7 [json_name = "moniker"];</code>
     * @return string
     */
    public function getMoniker()
    {
        return $this->moniker;
    }

    /**
     * Generated from protobuf field <code>string moniker = 7 [json_name = "moniker"];</code>
     * @param string $var
     * @return $this
     */
    public function setMoniker($var)
    {
        GPBUtil::checkString($var, True);
        $this->moniker = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.tendermint.p2p.DefaultNodeInfoOther other = 8 [json_name = "other", (.gogoproto.nullable) = false];</code>
     * @return \Tendermint\P2p\DefaultNodeInfoOther|null
     */
    public function getOther()
    {
        return $this->other;
    }

    public function hasOther()
    {
        return isset($this->other);
    }

    public function clearOther()
    {
        unset($this->other);
    }

    /**
     * Generated from protobuf field <code>.tendermint.p2p.DefaultNodeInfoOther other = 8 [json_name = "other", (.gogoproto.nullable) = false];</code>
     * @param \Tendermint\P2p\DefaultNodeInfoOther $var
     * @return $this
     */
    public function setOther($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\P2p\DefaultNodeInfoOther::class);
        $this->other = $var;

        return $this;
    }

}

