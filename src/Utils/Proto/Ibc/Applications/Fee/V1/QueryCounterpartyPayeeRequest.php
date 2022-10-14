<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/fee/v1/query.proto

namespace Ibc\Applications\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryCounterpartyPayeeRequest defines the request type for the CounterpartyPayee rpc
 *
 * Generated from protobuf message <code>ibc.applications.fee.v1.QueryCounterpartyPayeeRequest</code>
 */
class QueryCounterpartyPayeeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * unique channel identifier
     *
     * Generated from protobuf field <code>string channel_id = 1 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
     */
    protected $channel_id = '';
    /**
     * the relayer address to which the counterparty is registered
     *
     * Generated from protobuf field <code>string relayer = 2 [json_name = "relayer"];</code>
     */
    protected $relayer = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $channel_id
     *           unique channel identifier
     *     @type string $relayer
     *           the relayer address to which the counterparty is registered
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\Fee\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * unique channel identifier
     *
     * Generated from protobuf field <code>string channel_id = 1 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
     * @return string
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * unique channel identifier
     *
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
     * the relayer address to which the counterparty is registered
     *
     * Generated from protobuf field <code>string relayer = 2 [json_name = "relayer"];</code>
     * @return string
     */
    public function getRelayer()
    {
        return $this->relayer;
    }

    /**
     * the relayer address to which the counterparty is registered
     *
     * Generated from protobuf field <code>string relayer = 2 [json_name = "relayer"];</code>
     * @param string $var
     * @return $this
     */
    public function setRelayer($var)
    {
        GPBUtil::checkString($var, True);
        $this->relayer = $var;

        return $this;
    }

}
