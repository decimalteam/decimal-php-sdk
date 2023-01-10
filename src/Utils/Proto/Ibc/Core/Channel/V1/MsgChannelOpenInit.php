<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/channel/v1/tx.proto

namespace Ibc\Core\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgChannelOpenInit defines an sdk.Msg to initialize a channel handshake. It
 * is called by a relayer on Chain A.
 *
 * Generated from protobuf message <code>ibc.core.channel.v1.MsgChannelOpenInit</code>
 */
class MsgChannelOpenInit extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string port_id = 1 [json_name = "portId", (.gogoproto.moretags) = "yaml:\"port_id\""];</code>
     */
    protected $port_id = '';
    /**
     * Generated from protobuf field <code>.ibc.core.channel.v1.Channel channel = 2 [json_name = "channel", (.gogoproto.nullable) = false];</code>
     */
    protected $channel = null;
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
     *     @type \Ibc\Core\Channel\V1\Channel $channel
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
     * Generated from protobuf field <code>.ibc.core.channel.v1.Channel channel = 2 [json_name = "channel", (.gogoproto.nullable) = false];</code>
     * @return \Ibc\Core\Channel\V1\Channel|null
     */
    public function getChannel()
    {
        return $this->channel;
    }

    public function hasChannel()
    {
        return isset($this->channel);
    }

    public function clearChannel()
    {
        unset($this->channel);
    }

    /**
     * Generated from protobuf field <code>.ibc.core.channel.v1.Channel channel = 2 [json_name = "channel", (.gogoproto.nullable) = false];</code>
     * @param \Ibc\Core\Channel\V1\Channel $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Channel\V1\Channel::class);
        $this->channel = $var;

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

