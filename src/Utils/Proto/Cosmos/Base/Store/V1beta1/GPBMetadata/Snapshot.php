<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/store/v1beta1/snapshot.proto

namespace Cosmos\Base\Store\V1beta1\GPBMetadata;

class Snapshot
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(cosmos/base/store/v1beta1/snapshot.protocosmos.base.store.v1beta1"�
SnapshotItemD
store (2,.cosmos.base.store.v1beta1.SnapshotStoreItemH RstoreK
iavl (2+.cosmos.base.store.v1beta1.SnapshotIAVLItemB��IAVLH RiavlB
item"\'
SnapshotStoreItem
name (	Rname"l
SnapshotIAVLItem
key (Rkey
value (Rvalue
version (Rversion
height (RheightB�
com.cosmos.base.store.v1beta1BSnapshotProtoPZ(github.com/cosmos/cosmos-sdk/store/types�CBS�Cosmos.Base.Store.V1beta1�Cosmos\\Base\\Store\\V1beta1�%Cosmos\\Base\\Store\\V1beta1\\GPBMetadata�Cosmos::Base::Store::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

