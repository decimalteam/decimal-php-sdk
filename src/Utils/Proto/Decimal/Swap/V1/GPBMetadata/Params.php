<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/swap/v1/params.proto

namespace Decimal\Swap\V1\GPBMetadata;

class Params
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \CosmosProto\GPBMetadata\Cosmos::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
decimal/swap/v1/params.protodecimal.swap.v1cosmos_proto/cosmos.proto"�
Params9
locked_time_out (B��time.DurationRlockedTimeOut7
locked_time_in (B��time.DurationRlockedTimeInA
service_address (	BҴ-cosmos.AddressStringRserviceAddressC
checking_address (	BҴ-cosmos.AddressStringRcheckingAddress:�� ���B�
com.decimal.swap.v1BParamsProtoPZ4bitbucket.org/decimalteam/go-smart-node/x/swap/types�DSX�Decimal.Swap.V1�Decimal\\Swap\\V1�Decimal\\Swap\\V1\\GPBMetadata�Decimal::Swap::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

