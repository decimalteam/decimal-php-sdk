<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/fee/v1/tx.proto

namespace Ibc\Applications\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgRegisterPayee defines the request type for the RegisterPayee rpc
 *
 * Generated from protobuf message <code>ibc.applications.fee.v1.MsgRegisterPayee</code>
 */
class MsgRegisterPayee extends \Google\Protobuf\Internal\Message
{
    /**
     * unique port identifier
     *
     * Generated from protobuf field <code>string port_id = 1 [json_name = "portId", (.gogoproto.moretags) = "yaml:\"port_id\""];</code>
     */
    protected $port_id = '';
    /**
     * unique channel identifier
     *
     * Generated from protobuf field <code>string channel_id = 2 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
     */
    protected $channel_id = '';
    /**
     * the relayer address
     *
     * Generated from protobuf field <code>string relayer = 3 [json_name = "relayer"];</code>
     */
    protected $relayer = '';
    /**
     * the payee address
     *
     * Generated from protobuf field <code>string payee = 4 [json_name = "payee"];</code>
     */
    protected $payee = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $port_id
     *           unique port identifier
     *     @type string $channel_id
     *           unique channel identifier
     *     @type string $relayer
     *           the relayer address
     *     @type string $payee
     *           the payee address
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\Fee\V1\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * unique port identifier
     *
     * Generated from protobuf field <code>string port_id = 1 [json_name = "portId", (.gogoproto.moretags) = "yaml:\"port_id\""];</code>
     * @return string
     */
    public function getPortId()
    {
        return $this->port_id;
    }

    /**
     * unique port identifier
     *
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
     * unique channel identifier
     *
     * Generated from protobuf field <code>string channel_id = 2 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
     * @return string
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * unique channel identifier
     *
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
     * the relayer address
     *
     * Generated from protobuf field <code>string relayer = 3 [json_name = "relayer"];</code>
     * @return string
     */
    public function getRelayer()
    {
        return $this->relayer;
    }

    /**
     * the relayer address
     *
     * Generated from protobuf field <code>string relayer = 3 [json_name = "relayer"];</code>
     * @param string $var
     * @return $this
     */
    public function setRelayer($var)
    {
        GPBUtil::checkString($var, True);
        $this->relayer = $var;

        return $this;
    }

    /**
     * the payee address
     *
     * Generated from protobuf field <code>string payee = 4 [json_name = "payee"];</code>
     * @return string
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * the payee address
     *
     * Generated from protobuf field <code>string payee = 4 [json_name = "payee"];</code>
     * @param string $var
     * @return $this
     */
    public function setPayee($var)
    {
        GPBUtil::checkString($var, True);
        $this->payee = $var;

        return $this;
    }

}

