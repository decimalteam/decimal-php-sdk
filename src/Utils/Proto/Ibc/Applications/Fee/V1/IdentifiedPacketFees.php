<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/fee/v1/fee.proto

namespace Ibc\Applications\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IdentifiedPacketFees contains a list of type PacketFee and associated PacketId
 *
 * Generated from protobuf message <code>ibc.applications.fee.v1.IdentifiedPacketFees</code>
 */
class IdentifiedPacketFees extends \Google\Protobuf\Internal\Message
{
    /**
     * unique packet identifier comprised of the channel ID, port ID and sequence
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.PacketId packet_id = 1 [json_name = "packetId", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"packet_id\""];</code>
     */
    protected $packet_id = null;
    /**
     * list of packet fees
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.PacketFee packet_fees = 2 [json_name = "packetFees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"packet_fees\""];</code>
     */
    private $packet_fees;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ibc\Core\Channel\V1\PacketId $packet_id
     *           unique packet identifier comprised of the channel ID, port ID and sequence
     *     @type \Ibc\Applications\Fee\V1\PacketFee[]|\Google\Protobuf\Internal\RepeatedField $packet_fees
     *           list of packet fees
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\Fee\V1\Fee::initOnce();
        parent::__construct($data);
    }

    /**
     * unique packet identifier comprised of the channel ID, port ID and sequence
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.PacketId packet_id = 1 [json_name = "packetId", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"packet_id\""];</code>
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
     * unique packet identifier comprised of the channel ID, port ID and sequence
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.PacketId packet_id = 1 [json_name = "packetId", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"packet_id\""];</code>
     * @param \Ibc\Core\Channel\V1\PacketId $var
     * @return $this
     */
    public function setPacketId($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Channel\V1\PacketId::class);
        $this->packet_id = $var;

        return $this;
    }

    /**
     * list of packet fees
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.PacketFee packet_fees = 2 [json_name = "packetFees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"packet_fees\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPacketFees()
    {
        return $this->packet_fees;
    }

    /**
     * list of packet fees
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.PacketFee packet_fees = 2 [json_name = "packetFees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"packet_fees\""];</code>
     * @param \Ibc\Applications\Fee\V1\PacketFee[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPacketFees($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Applications\Fee\V1\PacketFee::class);
        $this->packet_fees = $arr;

        return $this;
    }

}
