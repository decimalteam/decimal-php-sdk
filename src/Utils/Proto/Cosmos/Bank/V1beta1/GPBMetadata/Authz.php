<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/bank/v1beta1/authz.proto

namespace Cosmos\Bank\V1beta1\GPBMetadata;

class Authz
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \CosmosProto\GPBMetadata\Cosmos::initOnce();
        \Cosmos\Base\V1beta1\GPBMetadata\Coin::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/bank/v1beta1/authz.protocosmos.bank.v1beta1cosmos_proto/cosmos.protocosmos/base/v1beta1/coin.proto"�
SendAuthorizationl
spend_limit (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsR
spendLimit:ʴ-AuthorizationB�
com.cosmos.bank.v1beta1B
AuthzProtoPZ)github.com/cosmos/cosmos-sdk/x/bank/types�CBX�Cosmos.Bank.V1beta1�Cosmos\\Bank\\V1beta1�Cosmos\\Bank\\V1beta1\\GPBMetadata�Cosmos::Bank::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

