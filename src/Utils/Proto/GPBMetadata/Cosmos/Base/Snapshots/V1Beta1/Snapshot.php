<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/snapshots/v1beta1/snapshot.proto

namespace GPBMetadata\Cosmos\Base\Snapshots\V1Beta1;

class Snapshot
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
�	
,cosmos/base/snapshots/v1beta1/snapshot.protocosmos.base.snapshots.v1beta1"�
Snapshot
height (Rheight
format (Rformat
chunks (Rchunks
hash (RhashI
metadata (2\'.cosmos.base.snapshots.v1beta1.MetadataB�� Rmetadata"-
Metadata!
chunk_hashes (RchunkHashes"�
SnapshotItemH
store (20.cosmos.base.snapshots.v1beta1.SnapshotStoreItemH RstoreO
iavl (2/.cosmos.base.snapshots.v1beta1.SnapshotIAVLItemB��IAVLH RiavlT
	extension (24.cosmos.base.snapshots.v1beta1.SnapshotExtensionMetaH R	extensionf
extension_payload (27.cosmos.base.snapshots.v1beta1.SnapshotExtensionPayloadH RextensionPayloadG
kv (2-.cosmos.base.snapshots.v1beta1.SnapshotKVItemB��KVH RkvG
schema (2-.cosmos.base.snapshots.v1beta1.SnapshotSchemaH RschemaB
item"\'
SnapshotStoreItem
name (	Rname"l
SnapshotIAVLItem
key (Rkey
value (Rvalue
version (Rversion
height (Rheight"C
SnapshotExtensionMeta
name (	Rname
format (Rformat"4
SnapshotExtensionPayload
payload (Rpayload"8
SnapshotKVItem
key (Rkey
value (Rvalue"$
SnapshotSchema
keys (RkeysB.Z,github.com/cosmos/cosmos-sdk/snapshots/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

