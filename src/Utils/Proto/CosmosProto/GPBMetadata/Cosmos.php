<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos_proto/cosmos.proto

namespace CosmosProto\GPBMetadata;

class Cosmos
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
cosmos_proto/cosmos.protocosmos_proto google/protobuf/descriptor.proto"K
InterfaceDescriptor
name (	Rname 
description (	Rdescription"�
ScalarDescriptor
name (	Rname 
description (	Rdescription7

field_type (2.cosmos_proto.ScalarTypeR	fieldType*X

ScalarType
SCALAR_TYPE_UNSPECIFIED 
SCALAR_TYPE_STRING
SCALAR_TYPE_BYTESB�
com.cosmos_protoBCosmosProtoPZ+github.com/cosmos/cosmos-proto;cosmos_proto�CXX�CosmosProto�CosmosProto�CosmosProto\\GPBMetadata�CosmosProtobproto3'
        , true);

        static::$is_initialized = true;
    }
}

