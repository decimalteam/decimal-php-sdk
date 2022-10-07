<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/fee/v1/query.proto

namespace Ibc\Applications\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryTotalAckFeesRequest defines the request type for the TotalAckFees rpc
 *
 * Generated from protobuf message <code>ibc.applications.fee.v1.QueryTotalAckFeesRequest</code>
 */
class QueryTotalAckFeesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * the packet identifier for the associated fees
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.PacketId packet_id = 1 [json_name = "packetId", (.gogoproto.nullable) = false];</code>
     */
    protected $packet_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ibc\Core\Channel\V1\PacketId $packet_id
     *           the packet identifier for the associated fees
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\Fee\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * the packet identifier for the associated fees
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.PacketId packet_id = 1 [json_name = "packetId", (.gogoproto.nullable) = false];</code>
     * @return \Ibc\Core\Channel\V1\PacketId|null
     */
    public function getPacketId()
    {
        return $this->packet_id;
    }

    public function hasPacketId()
    {
        return isset($this->packet_id);
    }

    public function clearPacketId()
    {
        unset($this->packet_id);
    }

    /**
     * the packet identifier for the associated fees
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.PacketId packet_id = 1 [json_name = "packetId", (.gogoproto.nullable) = false];</code>
     * @param \Ibc\Core\Channel\V1\PacketId $var
     * @return $this
     */
    public function setPacketId($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Channel\V1\PacketId::class);
        $this->packet_id = $var;

        return $this;
    }

}

