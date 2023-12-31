<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/channel/v1/tx.proto

namespace Ibc\Core\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgChannelCloseInit defines a msg sent by a Relayer to Chain A
 * to close a channel with Chain B.
 *
 * Generated from protobuf message <code>ibc.core.channel.v1.MsgChannelCloseInit</code>
 */
class MsgChannelCloseInit extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string signer = 3 [json_name = "signer"];</code>
     */
    protected $signer = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $port_id
     *     @type string $channel_id
     *     @type string $signer
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Channel\V1\Tx::initOnce();
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
     * Generated from protobuf field <code>string signer = 3 [json_name = "signer"];</code>
     * @return string
     */
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * Generated from protobuf field <code>string signer = 3 [json_name = "signer"];</code>
     * @param string $var
     * @return $this
     */
    public function setSigner($var)
    {
        GPBUtil::checkString($var, True);
        $this->signer = $var;

        return $this;
    }

}

