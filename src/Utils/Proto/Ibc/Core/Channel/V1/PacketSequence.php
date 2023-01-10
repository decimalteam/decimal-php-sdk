<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/channel/v1/genesis.proto

namespace Ibc\Core\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PacketSequence defines the genesis type necessary to retrieve and store
 * next send and receive sequences.
 *
 * Generated from protobuf message <code>ibc.core.channel.v1.PacketSequence</code>
 */
class PacketSequence extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string port_id = 1 [json_name = "portId", (.gogoproto.moretags) = "yaml:\"port_id\""];</code>
     */
    protected $port_id = '';
    /**
     * Generated from protobuf field <code>string channel_id = 2 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
     */
    protected $channel_id = '';
    /**
     * Generated from protobuf field <code>uint64 sequence = 3 [json_name = "sequence"];</code>
     */
    protected $sequence = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $port_id
     *     @type string $channel_id
     *     @type int|string $sequence
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Channel\V1\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string port_id = 1 [json_name = "portId", (.gogoproto.moretags) = "yaml:\"port_id\""];</code>
     * @return string
     */
    public function getPortId()
    {
        return $this->port_id;
    }

    /**
     * Generated from protobuf field <code>string port_id = 1 [json_name = "portId", (.gogoproto.moretags) = "yaml:\"port_id\""];</code>
     * @param string $var
     * @return $this
     */
    public function setPortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->port_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string channel_id = 2 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
     * @return string
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * Generated from protobuf field <code>string channel_id = 2 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
     * @param string $var
     * @return $this
     */
    public function setChannelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 sequence = 3 [json_name = "sequence"];</code>
     * @return int|string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Generated from protobuf field <code>uint64 sequence = 3 [json_name = "sequence"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->sequence = $var;

        return $this;
    }

}

