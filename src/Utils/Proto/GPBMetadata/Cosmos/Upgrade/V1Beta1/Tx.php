<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/upgrade/v1beta1/tx.proto

namespace GPBMetadata\Cosmos\Upgrade\V1Beta1;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        \GPBMetadata\Cosmos\Upgrade\V1Beta1\Upgrade::initOnce();
        \GPBMetadata\Cosmos\Msg\V1\Msg::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/upgrade/v1beta1/tx.protocosmos.upgrade.v1beta1cosmos_proto/cosmos.proto$cosmos/upgrade/v1beta1/upgrade.protocosmos/msg/v1/msg.proto"�
MsgSoftwareUpgrade6
	authority (	BҴ-cosmos.AddressStringR	authority6
plan (2.cosmos.upgrade.v1beta1.PlanB�� Rplan:��*	authority"
MsgSoftwareUpgradeResponse"Z
MsgCancelUpgrade6
	authority (	BҴ-cosmos.AddressStringR	authority:��*	authority"
MsgCancelUpgradeResponse2�
Msgq
SoftwareUpgrade*.cosmos.upgrade.v1beta1.MsgSoftwareUpgrade2.cosmos.upgrade.v1beta1.MsgSoftwareUpgradeResponsek
CancelUpgrade(.cosmos.upgrade.v1beta1.MsgCancelUpgrade0.cosmos.upgrade.v1beta1.MsgCancelUpgradeResponseB.Z,github.com/cosmos/cosmos-sdk/x/upgrade/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

