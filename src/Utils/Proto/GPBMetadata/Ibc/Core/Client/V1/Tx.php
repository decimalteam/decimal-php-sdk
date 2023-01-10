<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/client/v1/tx.proto

namespace GPBMetadata\Ibc\Core\Client\V1;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
ibc/core/client/v1/tx.protoibc.core.client.v1google/protobuf/any.proto"�
MsgCreateClientP
client_state (2.google.protobuf.AnyB��yaml:"client_state"RclientStateY
consensus_state (2.google.protobuf.AnyB��yaml:"consensus_state"RconsensusState
signer (	Rsigner:�� � "
MsgCreateClientResponse"�
MsgUpdateClient1
	client_id (	B��yaml:"client_id"RclientId,
header (2.google.protobuf.AnyRheader
signer (	Rsigner:�� � "
MsgUpdateClientResponse"�
MsgUpgradeClient1
	client_id (	B��yaml:"client_id"RclientIdP
client_state (2.google.protobuf.AnyB��yaml:"client_state"RclientStateY
consensus_state (2.google.protobuf.AnyB��yaml:"consensus_state"RconsensusStateQ
proof_upgrade_client (B��yaml:"proof_upgrade_client"RproofUpgradeClientk
proof_upgrade_consensus_state (B(��$yaml:"proof_upgrade_consensus_state"RproofUpgradeConsensusState
signer (	Rsigner:�� � "
MsgUpgradeClientResponse"�
MsgSubmitMisbehaviour1
	client_id (	B��yaml:"client_id"RclientId8
misbehaviour (2.google.protobuf.AnyRmisbehaviour
signer (	Rsigner:�� � "
MsgSubmitMisbehaviourResponse2�
Msg`
CreateClient#.ibc.core.client.v1.MsgCreateClient+.ibc.core.client.v1.MsgCreateClientResponse`
UpdateClient#.ibc.core.client.v1.MsgUpdateClient+.ibc.core.client.v1.MsgUpdateClientResponsec
UpgradeClient$.ibc.core.client.v1.MsgUpgradeClient,.ibc.core.client.v1.MsgUpgradeClientResponser
SubmitMisbehaviour).ibc.core.client.v1.MsgSubmitMisbehaviour1.ibc.core.client.v1.MsgSubmitMisbehaviourResponseB:Z8github.com/cosmos/ibc-go/v5/modules/core/02-client/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

