<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/legacy/v1/tx.proto

namespace GPBMetadata\Decimal\Legacy\V1;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cosmos\Msg\V1\Msg::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
decimal/legacy/v1/tx.protodecimal.legacy.v1cosmos_proto/cosmos.proto"o
MsgReturnLegacy0
sender (	BҴ-cosmos.AddressStringRsender

public_key (R	publicKey:��*sender"
MsgReturnLegacyResponse2e
Msg^
ReturnLegacy".decimal.legacy.v1.MsgReturnLegacy*.decimal.legacy.v1.MsgReturnLegacyResponseB8Z6bitbucket.org/decimalteam/go-smart-node/x/legacy/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

