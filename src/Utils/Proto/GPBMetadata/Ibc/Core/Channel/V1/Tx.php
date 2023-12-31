<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/channel/v1/tx.proto

namespace GPBMetadata\Ibc\Core\Channel\V1;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Ibc\Core\Client\V1\Client::initOnce();
        \GPBMetadata\Ibc\Core\Channel\V1\Channel::initOnce();
        $pool->internalAddGeneratedFile(
            '
�)
ibc/core/channel/v1/tx.protoibc.core.channel.v1ibc/core/client/v1/client.proto!ibc/core/channel/v1/channel.proto"�
MsgChannelOpenInit+
port_id (	B��yaml:"port_id"RportId<
channel (2.ibc.core.channel.v1.ChannelB�� Rchannel
signer (	Rsigner:�� � "l
MsgChannelOpenInitResponse4

channel_id (	B��yaml:"channel_id"R	channelId
version (	Rversion"�
MsgChannelOpenTry+
port_id (	B��yaml:"port_id"RportIdP
previous_channel_id (	B ��yaml:"previous_channel_id"RpreviousChannelId<
channel (2.ibc.core.channel.v1.ChannelB�� RchannelR
counterparty_version (	B��yaml:"counterparty_version"RcounterpartyVersion4

proof_init (B��yaml:"proof_init"R	proofInitZ
proof_height (2.ibc.core.client.v1.HeightB�� ��yaml:"proof_height"RproofHeight
signer (	Rsigner:�� � "5
MsgChannelOpenTryResponse
version (	Rversion"�
MsgChannelOpenAck+
port_id (	B��yaml:"port_id"RportId4

channel_id (	B��yaml:"channel_id"R	channelIdZ
counterparty_channel_id (	B"��yaml:"counterparty_channel_id"RcounterpartyChannelIdR
counterparty_version (	B��yaml:"counterparty_version"RcounterpartyVersion1
	proof_try (B��yaml:"proof_try"RproofTryZ
proof_height (2.ibc.core.client.v1.HeightB�� ��yaml:"proof_height"RproofHeight
signer (	Rsigner:�� � "
MsgChannelOpenAckResponse"�
MsgChannelOpenConfirm+
port_id (	B��yaml:"port_id"RportId4

channel_id (	B��yaml:"channel_id"R	channelId1
	proof_ack (B��yaml:"proof_ack"RproofAckZ
proof_height (2.ibc.core.client.v1.HeightB�� ��yaml:"proof_height"RproofHeight
signer (	Rsigner:�� � "
MsgChannelOpenConfirmResponse"�
MsgChannelCloseInit+
port_id (	B��yaml:"port_id"RportId4

channel_id (	B��yaml:"channel_id"R	channelId
signer (	Rsigner:�� � "
MsgChannelCloseInitResponse"�
MsgChannelCloseConfirm+
port_id (	B��yaml:"port_id"RportId4

channel_id (	B��yaml:"channel_id"R	channelId4

proof_init (B��yaml:"proof_init"R	proofInitZ
proof_height (2.ibc.core.client.v1.HeightB�� ��yaml:"proof_height"RproofHeight
signer (	Rsigner:�� � " 
MsgChannelCloseConfirmResponse"�
MsgRecvPacket9
packet (2.ibc.core.channel.v1.PacketB�� RpacketF
proof_commitment (B��yaml:"proof_commitment"RproofCommitmentZ
proof_height (2.ibc.core.client.v1.HeightB�� ��yaml:"proof_height"RproofHeight
signer (	Rsigner:�� � "^
MsgRecvPacketResponse?
result (2\'.ibc.core.channel.v1.ResponseResultTypeRresult:�� "�

MsgTimeout9
packet (2.ibc.core.channel.v1.PacketB�� RpacketF
proof_unreceived (B��yaml:"proof_unreceived"RproofUnreceivedZ
proof_height (2.ibc.core.client.v1.HeightB�� ��yaml:"proof_height"RproofHeightK
next_sequence_recv (B��yaml:"next_sequence_recv"RnextSequenceRecv
signer (	Rsigner:�� � "[
MsgTimeoutResponse?
result (2\'.ibc.core.channel.v1.ResponseResultTypeRresult:�� "�
MsgTimeoutOnClose9
packet (2.ibc.core.channel.v1.PacketB�� RpacketF
proof_unreceived (B��yaml:"proof_unreceived"RproofUnreceived7
proof_close (B��yaml:"proof_close"R
proofCloseZ
proof_height (2.ibc.core.client.v1.HeightB�� ��yaml:"proof_height"RproofHeightK
next_sequence_recv (B��yaml:"next_sequence_recv"RnextSequenceRecv
signer (	Rsigner:�� � "b
MsgTimeoutOnCloseResponse?
result (2\'.ibc.core.channel.v1.ResponseResultTypeRresult:�� "�
MsgAcknowledgement9
packet (2.ibc.core.channel.v1.PacketB�� Rpacket(
acknowledgement (Racknowledgement7
proof_acked (B��yaml:"proof_acked"R
proofAckedZ
proof_height (2.ibc.core.client.v1.HeightB�� ��yaml:"proof_height"RproofHeight
signer (	Rsigner:�� � "c
MsgAcknowledgementResponse?
result (2\'.ibc.core.channel.v1.ResponseResultTypeRresult:�� *�
ResponseResultType5
 RESPONSE_RESULT_TYPE_UNSPECIFIED �� UNSPECIFIED\'
RESPONSE_RESULT_TYPE_NOOP�� NOOP-
RESPONSE_RESULT_TYPE_SUCCESS�� SUCCESS�� 2�
Msgk
ChannelOpenInit\'.ibc.core.channel.v1.MsgChannelOpenInit/.ibc.core.channel.v1.MsgChannelOpenInitResponseh
ChannelOpenTry&.ibc.core.channel.v1.MsgChannelOpenTry..ibc.core.channel.v1.MsgChannelOpenTryResponseh
ChannelOpenAck&.ibc.core.channel.v1.MsgChannelOpenAck..ibc.core.channel.v1.MsgChannelOpenAckResponset
ChannelOpenConfirm*.ibc.core.channel.v1.MsgChannelOpenConfirm2.ibc.core.channel.v1.MsgChannelOpenConfirmResponsen
ChannelCloseInit(.ibc.core.channel.v1.MsgChannelCloseInit0.ibc.core.channel.v1.MsgChannelCloseInitResponsew
ChannelCloseConfirm+.ibc.core.channel.v1.MsgChannelCloseConfirm3.ibc.core.channel.v1.MsgChannelCloseConfirmResponse\\

RecvPacket".ibc.core.channel.v1.MsgRecvPacket*.ibc.core.channel.v1.MsgRecvPacketResponseS
Timeout.ibc.core.channel.v1.MsgTimeout\'.ibc.core.channel.v1.MsgTimeoutResponseh
TimeoutOnClose&.ibc.core.channel.v1.MsgTimeoutOnClose..ibc.core.channel.v1.MsgTimeoutOnCloseResponsek
Acknowledgement\'.ibc.core.channel.v1.MsgAcknowledgement/.ibc.core.channel.v1.MsgAcknowledgementResponseB;Z9github.com/cosmos/ibc-go/v5/modules/core/04-channel/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

