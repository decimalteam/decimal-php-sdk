<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/feegrant/v1beta1/tx.proto

namespace Cosmos\Feegrant\V1beta1\GPBMetadata;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \CosmosProto\GPBMetadata\Cosmos::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 cosmos/feegrant/v1beta1/tx.protocosmos.feegrant.v1beta1cosmos_proto/cosmos.proto"�
MsgGrantAllowance
granter (	Rgranter
grantee (	RgranteeE
	allowance (2.google.protobuf.AnyBʴ-FeeAllowanceIR	allowance"
MsgGrantAllowanceResponse"H
MsgRevokeAllowance
granter (	Rgranter
grantee (	Rgrantee"
MsgRevokeAllowanceResponse2�
Msgp
GrantAllowance*.cosmos.feegrant.v1beta1.MsgGrantAllowance2.cosmos.feegrant.v1beta1.MsgGrantAllowanceResponses
RevokeAllowance+.cosmos.feegrant.v1beta1.MsgRevokeAllowance3.cosmos.feegrant.v1beta1.MsgRevokeAllowanceResponseB�
com.cosmos.feegrant.v1beta1BTxProtoPZ\'github.com/cosmos/cosmos-sdk/x/feegrant�CFX�Cosmos.Feegrant.V1beta1�Cosmos\\Feegrant\\V1beta1�#Cosmos\\Feegrant\\V1beta1\\GPBMetadata�Cosmos::Feegrant::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

