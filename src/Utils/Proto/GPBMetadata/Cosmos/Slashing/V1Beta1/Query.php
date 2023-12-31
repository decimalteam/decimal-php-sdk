<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/slashing/v1beta1/query.proto

namespace GPBMetadata\Cosmos\Slashing\V1Beta1;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cosmos\Base\Query\V1Beta1\Pagination::initOnce();
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Cosmos\Slashing\V1Beta1\Slashing::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

#cosmos/slashing/v1beta1/query.protocosmos.slashing.v1beta1gogoproto/gogo.protogoogle/api/annotations.proto&cosmos/slashing/v1beta1/slashing.protocosmos_proto/cosmos.proto"
QueryParamsRequest"T
QueryParamsResponse=
params (2.cosmos.slashing.v1beta1.ParamsB�� Rparams"V
QuerySigningInfoRequest;
cons_address (	BҴ-cosmos.AddressStringRconsAddress"y
QuerySigningInfoResponse]
val_signing_info (2-.cosmos.slashing.v1beta1.ValidatorSigningInfoB�� RvalSigningInfo"b
QuerySigningInfosRequestF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QuerySigningInfosResponseG
info (2-.cosmos.slashing.v1beta1.ValidatorSigningInfoB�� RinfoG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination2�
Query�
Params+.cosmos.slashing.v1beta1.QueryParamsRequest,.cosmos.slashing.v1beta1.QueryParamsResponse"\'���!/cosmos/slashing/v1beta1/params�
SigningInfo0.cosmos.slashing.v1beta1.QuerySigningInfoRequest1.cosmos.slashing.v1beta1.QuerySigningInfoResponse"=���75/cosmos/slashing/v1beta1/signing_infos/{cons_address}�
SigningInfos1.cosmos.slashing.v1beta1.QuerySigningInfosRequest2.cosmos.slashing.v1beta1.QuerySigningInfosResponse".���(&/cosmos/slashing/v1beta1/signing_infosB/Z-github.com/cosmos/cosmos-sdk/x/slashing/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

