<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/nft/v1/params.proto

namespace Decimal\Nft\V1\GPBMetadata;

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
�
decimal/nft/v1/params.protodecimal.nft.v1cosmos_proto/cosmos.proto"�
Params.
max_collection_size (RmaxCollectionSize,
max_token_quantity (RmaxTokenQuantityY
min_reserve_amount (	B+�� ��cosmossdk.io/math.IntҴ-
cosmos.IntRminReserveAmount:�� ���B�
com.decimal.nft.v1BParamsProtoPZ3bitbucket.org/decimalteam/go-smart-node/x/nft/types�DNX�Decimal.Nft.V1�Decimal\\Nft\\V1�Decimal\\Nft\\V1\\GPBMetadata�Decimal::Nft::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

