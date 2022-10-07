<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/channel/v1/tx.proto

namespace Ibc\Core\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgChannelOpenInitResponse defines the Msg/ChannelOpenInit response type.
 *
 * Generated from protobuf message <code>ibc.core.channel.v1.MsgChannelOpenInitResponse</code>
 */
class MsgChannelOpenInitResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string channel_id = 1 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
     */
    protected $channel_id = '';
    /**
     * Generated from protobuf field <code>string version = 2 [json_name = "version"];</code>
     */
    protected $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $channel_id
     *     @type string $version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Channel\V1\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string channel_id = 1 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
     * @return string
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * Generated from protobuf field <code>string channel_id = 1 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
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
     * Generated from protobuf field <code>string version = 2 [json_name = "version"];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>string version = 2 [json_name = "version"];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

