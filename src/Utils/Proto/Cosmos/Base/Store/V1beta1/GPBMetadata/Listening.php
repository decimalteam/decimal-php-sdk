<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/store/v1beta1/listening.proto

namespace Cosmos\Base\Store\V1beta1\GPBMetadata;

class Listening
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
)cosmos/base/store/v1beta1/listening.protocosmos.base.store.v1beta1"j
StoreKVPair
	store_key (	RstoreKey
delete (Rdelete
key (Rkey
value (RvalueB�
com.cosmos.base.store.v1beta1BListeningProtoPZ(github.com/cosmos/cosmos-sdk/store/types�CBS�Cosmos.Base.Store.V1beta1�Cosmos\\Base\\Store\\V1beta1�%Cosmos\\Base\\Store\\V1beta1\\GPBMetadata�Cosmos::Base::Store::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

