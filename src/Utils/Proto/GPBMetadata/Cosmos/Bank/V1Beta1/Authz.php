<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/bank/v1beta1/authz.proto

namespace GPBMetadata\Cosmos\Bank\V1Beta1;

class Authz
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        \GPBMetadata\Cosmos\Base\V1Beta1\Coin::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/bank/v1beta1/authz.protocosmos.bank.v1beta1cosmos_proto/cosmos.protocosmos/base/v1beta1/coin.proto"�
SendAuthorizationl
spend_limit (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsR
spendLimit:ʴ-AuthorizationB+Z)github.com/cosmos/cosmos-sdk/x/bank/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

