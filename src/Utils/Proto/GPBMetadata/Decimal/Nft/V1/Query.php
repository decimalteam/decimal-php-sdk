<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/nft/v1/query.proto

namespace GPBMetadata\Decimal\Nft\V1;

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
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        \GPBMetadata\Cosmos\Base\Query\V1Beta1\Pagination::initOnce();
        \GPBMetadata\Decimal\Nft\V1\Nft::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
decimal/nft/v1/query.protodecimal.nft.v1google/api/annotations.protocosmos_proto/cosmos.proto*cosmos/base/query/v1beta1/pagination.protodecimal/nft/v1/nft.proto"a
QueryCollectionsRequestF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryCollectionsResponseB
collections (2.decimal.nft.v1.CollectionB�� RcollectionsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"�
 QueryCollectionsByCreatorRequest2
creator (	BҴ-cosmos.AddressStringRcreatorF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
!QueryCollectionsByCreatorResponseB
collections (2.decimal.nft.v1.CollectionB�� RcollectionsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"b
QueryCollectionRequest2
creator (	BҴ-cosmos.AddressStringRcreator
denom (	Rdenom"[
QueryCollectionResponse@

collection (2.decimal.nft.v1.CollectionB�� R
collection".
QueryTokenRequest
token_id (	RtokenId"G
QueryTokenResponse1
token (2.decimal.nft.v1.TokenB�� Rtoken"S
QuerySubTokenRequest
token_id (	RtokenId 
sub_token_id (	R
subTokenId"T
QuerySubTokenResponse;
	sub_token (2.decimal.nft.v1.SubTokenB�� RsubToken2�
Query�
Collections\'.decimal.nft.v1.QueryCollectionsRequest(.decimal.nft.v1.QueryCollectionsResponse"#���/decimal/nft/v1/collections�
CollectionsByCreator0.decimal.nft.v1.QueryCollectionsByCreatorRequest1.decimal.nft.v1.QueryCollectionsByCreatorResponse"-���\'%/decimal/nft/v1/collections/{creator}�

Collection&.decimal.nft.v1.QueryCollectionRequest\'.decimal.nft.v1.QueryCollectionResponse"4���.,/decimal/nft/v1/collection/{creator}/{denom}x
Token!.decimal.nft.v1.QueryTokenRequest".decimal.nft.v1.QueryTokenResponse"(���" /decimal/nft/v1/token/{token_id}�
SubToken$.decimal.nft.v1.QuerySubTokenRequest%.decimal.nft.v1.QuerySubTokenResponse"8���20/decimal/nft/v1/tokens/{token_id}/{sub_token_id}B5Z3bitbucket.org/decimalteam/go-smart-node/x/nft/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

