<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/fee/v1/tx.proto

namespace GPBMetadata\Decimal\Fee\V1;

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
        \GPBMetadata\Cosmos\Msg\V1\Msg::initOnce();
        \GPBMetadata\Decimal\Fee\V1\Fee::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
decimal/fee/v1/tx.protodecimal.fee.v1cosmos_proto/cosmos.protocosmos/msg/v1/msg.protodecimal/fee/v1/fee.proto"�
MsgUpdateCoinPrices0
oracle (	BҴ-cosmos.AddressStringRoracle7
prices (2.decimal.fee.v1.CoinPriceB�� Rprices:��*oracle"
MsgUpdateCoinPricesResponse2k
Msgd
UpdateCoinPrices#.decimal.fee.v1.MsgUpdateCoinPrices+.decimal.fee.v1.MsgUpdateCoinPricesResponseB5Z3bitbucket.org/decimalteam/go-smart-node/x/fee/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

