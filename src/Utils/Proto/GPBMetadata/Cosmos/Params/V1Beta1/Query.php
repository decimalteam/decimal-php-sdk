<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/params/v1beta1/query.proto

namespace GPBMetadata\Cosmos\Params\V1Beta1;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Cosmos\Params\V1Beta1\Params::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
!cosmos/params/v1beta1/query.protocosmos.params.v1beta1google/api/annotations.proto"cosmos/params/v1beta1/params.proto"B
QueryParamsRequest
subspace (	Rsubspace
key (	Rkey"U
QueryParamsResponse>
param (2".cosmos.params.v1beta1.ParamChangeB�� Rparam"
QuerySubspacesRequest"W
QuerySubspacesResponse=
	subspaces (2.cosmos.params.v1beta1.SubspaceR	subspaces":
Subspace
subspace (	Rsubspace
keys (	Rkeys2�
Query�
Params).cosmos.params.v1beta1.QueryParamsRequest*.cosmos.params.v1beta1.QueryParamsResponse"%���/cosmos/params/v1beta1/params�
	Subspaces,.cosmos.params.v1beta1.QuerySubspacesRequest-.cosmos.params.v1beta1.QuerySubspacesResponse"(���" /cosmos/params/v1beta1/subspacesB6Z4github.com/cosmos/cosmos-sdk/x/params/types/proposalbproto3'
        , true);

        static::$is_initialized = true;
    }
}

