<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/multisig/v1/multisig.proto

namespace Decimal\Multisig\V1\GPBMetadata;

class Multisig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \CosmosProto\GPBMetadata\Cosmos::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"decimal/multisig/v1/multisig.protodecimal.multisig.v1google/protobuf/any.protocosmos_proto/cosmos.proto"�
Wallet2
address (	BҴ-cosmos.AddressStringRaddress
owners (	Rowners
weights (Rweights
	threshold (R	threshold:�� ���"�
Transaction
id (	Rid0
wallet (	BҴ-cosmos.AddressStringRwallet?
message (2.google.protobuf.AnyB�� ʴ-sdk.MsgRmessage

created_at (R	createdAt:�� ���B�
com.decimal.multisig.v1BMultisigProtoPZ8bitbucket.org/decimalteam/go-smart-node/x/multisig/types�DMX�Decimal.Multisig.V1�Decimal\\Multisig\\V1�Decimal\\Multisig\\V1\\GPBMetadata�Decimal::Multisig::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

