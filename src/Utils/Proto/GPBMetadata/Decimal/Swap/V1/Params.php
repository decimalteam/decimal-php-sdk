<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/swap/v1/params.proto

namespace GPBMetadata\Decimal\Swap\V1;

class Params
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
decimal/swap/v1/params.protodecimal.swap.v1cosmos_proto/cosmos.proto"�
Params9
locked_time_out (B��time.DurationRlockedTimeOut7
locked_time_in (B��time.DurationRlockedTimeInA
service_address (	BҴ-cosmos.AddressStringRserviceAddressC
checking_address (	BҴ-cosmos.AddressStringRcheckingAddress:�� ���B6Z4bitbucket.org/decimalteam/go-smart-node/x/swap/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

