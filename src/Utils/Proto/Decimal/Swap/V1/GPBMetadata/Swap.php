<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/swap/v1/swap.proto

namespace Decimal\Swap\V1\GPBMetadata;

class Swap
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
decimal/swap/v1/swap.protodecimal.swap.v1cosmos_proto/cosmos.proto"C
Chain
id (Rid
name (	Rname
active (Ractive"�
Swap1
hashed_secret (	B����HashRhashedSecret
from (	Rfrom
	recipient (	R	recipientC
amount (	B+�� ��cosmossdk.io/math.IntҴ-
cosmos.IntRamount
	timestamp (R	timestamp
redeemed (Rredeemed
refunded (RrefundedB�
com.decimal.swap.v1B	SwapProtoPZ4bitbucket.org/decimalteam/go-smart-node/x/swap/types�DSX�Decimal.Swap.V1�Decimal\\Swap\\V1�Decimal\\Swap\\V1\\GPBMetadata�Decimal::Swap::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

