<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/channel/v1/channel.proto

namespace GPBMetadata\Ibc\Core\Channel\V1;

class Channel
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Ibc\Core\Client\V1\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
!ibc/core/channel/v1/channel.protoibc.core.channel.v1ibc/core/client/v1/client.proto"�
Channel0
state (2.ibc.core.channel.v1.StateRstate6
ordering (2.ibc.core.channel.v1.OrderRorderingK
counterparty (2!.ibc.core.channel.v1.CounterpartyB�� RcounterpartyC
connection_hops (	B��yaml:"connection_hops"RconnectionHops
version (	Rversion:�� "�
IdentifiedChannel0
state (2.ibc.core.channel.v1.StateRstate6
ordering (2.ibc.core.channel.v1.OrderRorderingK
counterparty (2!.ibc.core.channel.v1.CounterpartyB�� RcounterpartyC
connection_hops (	B��yaml:"connection_hops"RconnectionHops
version (	Rversion
port_id (	RportId

channel_id (	R	channelId:�� "w
Counterparty+
port_id (	B��yaml:"port_id"RportId4

channel_id (	B��yaml:"channel_id"R	channelId:�� "�
Packet
sequence (Rsequence7
source_port (	B��yaml:"source_port"R
sourcePort@
source_channel (	B��yaml:"source_channel"RsourceChannelF
destination_port (	B��yaml:"destination_port"RdestinationPortO
destination_channel (	B��yaml:"destination_channel"RdestinationChannel
data (Rdata`
timeout_height (2.ibc.core.client.v1.HeightB�� ��yaml:"timeout_height"RtimeoutHeightI
timeout_timestamp (B��yaml:"timeout_timestamp"RtimeoutTimestamp:�� "�
PacketState+
port_id (	B��yaml:"port_id"RportId4

channel_id (	B��yaml:"channel_id"R	channelId
sequence (Rsequence
data (Rdata:�� "�
PacketId+
port_id (	B��yaml:"port_id"RportId4

channel_id (	B��yaml:"channel_id"R	channelId
sequence (Rsequence:�� "O
Acknowledgement
result (H Rresult
error (	H RerrorB

response*�
State6
STATE_UNINITIALIZED_UNSPECIFIED �� UNINITIALIZED

STATE_INIT�� INIT
STATE_TRYOPEN�� TRYOPEN

STATE_OPEN�� OPEN
STATE_CLOSED
�� CLOSED�� *w
Order$
ORDER_NONE_UNSPECIFIED �� NONE"
ORDER_UNORDERED�� 	UNORDERED
ORDER_ORDERED�� ORDERED�� B;Z9github.com/cosmos/ibc-go/v5/modules/core/04-channel/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

