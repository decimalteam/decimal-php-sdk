<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/crisis/v1beta1/genesis.proto

namespace GPBMetadata\Cosmos\Crisis\V1Beta1;

class Genesis
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Cosmos\Base\V1Beta1\Coin::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#cosmos/crisis/v1beta1/genesis.protocosmos.crisis.v1beta1cosmos/base/v1beta1/coin.proto"R
GenesisStateB
constant_fee (2.cosmos.base.v1beta1.CoinB�� RconstantFeeB-Z+github.com/cosmos/cosmos-sdk/x/crisis/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

