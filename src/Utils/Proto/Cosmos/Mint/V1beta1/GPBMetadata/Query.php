<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/mint/v1beta1/query.proto

namespace Cosmos\Mint\V1beta1\GPBMetadata;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \Google\Api\GPBMetadata\Annotations::initOnce();
        \Cosmos\Mint\V1beta1\GPBMetadata\Mint::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
cosmos/mint/v1beta1/query.protocosmos.mint.v1beta1google/api/annotations.protocosmos/mint/v1beta1/mint.proto"
QueryParamsRequest"P
QueryParamsResponse9
params (2.cosmos.mint.v1beta1.ParamsB�� Rparams"
QueryInflationRequest"f
QueryInflationResponseL
	inflation (B.�� ��&github.com/cosmos/cosmos-sdk/types.DecR	inflation"
QueryAnnualProvisionsRequest"|
QueryAnnualProvisionsResponse[
annual_provisions (B.�� ��&github.com/cosmos/cosmos-sdk/types.DecRannualProvisions2�
Query�
Params\'.cosmos.mint.v1beta1.QueryParamsRequest(.cosmos.mint.v1beta1.QueryParamsResponse"#���/cosmos/mint/v1beta1/params�
	Inflation*.cosmos.mint.v1beta1.QueryInflationRequest+.cosmos.mint.v1beta1.QueryInflationResponse"&��� /cosmos/mint/v1beta1/inflation�
AnnualProvisions1.cosmos.mint.v1beta1.QueryAnnualProvisionsRequest2.cosmos.mint.v1beta1.QueryAnnualProvisionsResponse".���(&/cosmos/mint/v1beta1/annual_provisionsB�
com.cosmos.mint.v1beta1B
QueryProtoPZ)github.com/cosmos/cosmos-sdk/x/mint/types�CMX�Cosmos.Mint.V1beta1�Cosmos\\Mint\\V1beta1�Cosmos\\Mint\\V1beta1\\GPBMetadata�Cosmos::Mint::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

