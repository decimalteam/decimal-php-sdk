<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/fee/v1/query.proto

namespace Ibc\Applications\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryIncentivizedPacketsResponse defines the response type for the IncentivizedPackets rpc
 *
 * Generated from protobuf message <code>ibc.applications.fee.v1.QueryIncentivizedPacketsResponse</code>
 */
class QueryIncentivizedPacketsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * list of identified fees for incentivized packets
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.IdentifiedPacketFees incentivized_packets = 1 [json_name = "incentivizedPackets", (.gogoproto.nullable) = false];</code>
     */
    private $incentivized_packets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ibc\Applications\Fee\V1\IdentifiedPacketFees[]|\Google\Protobuf\Internal\RepeatedField $incentivized_packets
     *           list of identified fees for incentivized packets
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\Fee\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * list of identified fees for incentivized packets
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.IdentifiedPacketFees incentivized_packets = 1 [json_name = "incentivizedPackets", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncentivizedPackets()
    {
        return $this->incentivized_packets;
    }

    /**
     * list of identified fees for incentivized packets
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.IdentifiedPacketFees incentivized_packets = 1 [json_name = "incentivizedPackets", (.gogoproto.nullable) = false];</code>
     * @param \Ibc\Applications\Fee\V1\IdentifiedPacketFees[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncentivizedPackets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Applications\Fee\V1\IdentifiedPacketFees::class);
        $this->incentivized_packets = $arr;

        return $this;
    }

}

