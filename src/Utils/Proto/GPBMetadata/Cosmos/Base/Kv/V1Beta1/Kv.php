<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/kv/v1beta1/kv.proto

namespace GPBMetadata\Cosmos\Base\Kv\V1Beta1;

class Kv
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/base/kv/v1beta1/kv.protocosmos.base.kv.v1beta1"A
Pairs8
pairs (2.cosmos.base.kv.v1beta1.PairB�� Rpairs".
Pair
key (Rkey
value (RvalueB\'Z%github.com/cosmos/cosmos-sdk/types/kvbproto3'
        , true);

        static::$is_initialized = true;
    }
}

