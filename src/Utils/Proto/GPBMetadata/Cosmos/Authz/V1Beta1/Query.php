<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/authz/v1beta1/query.proto

namespace GPBMetadata\Cosmos\Authz\V1Beta1;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Cosmos\Base\Query\V1Beta1\Pagination::initOnce();
        \GPBMetadata\Cosmos\Authz\V1Beta1\Authz::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 cosmos/authz/v1beta1/query.protocosmos.authz.v1beta1*cosmos/base/query/v1beta1/pagination.proto cosmos/authz/v1beta1/authz.protocosmos_proto/cosmos.proto"�
QueryGrantsRequest2
granter (	BҴ-cosmos.AddressStringRgranter2
grantee (	BҴ-cosmos.AddressStringRgrantee 
msg_type_url (	R
msgTypeUrlF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryGrantsResponse3
grants (2.cosmos.authz.v1beta1.GrantRgrantsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"�
QueryGranterGrantsRequest2
granter (	BҴ-cosmos.AddressStringRgranterF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryGranterGrantsResponse@
grants (2(.cosmos.authz.v1beta1.GrantAuthorizationRgrantsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"�
QueryGranteeGrantsRequest2
grantee (	BҴ-cosmos.AddressStringRgranteeF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryGranteeGrantsResponse@
grants (2(.cosmos.authz.v1beta1.GrantAuthorizationRgrantsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination2�
Query�
Grants(.cosmos.authz.v1beta1.QueryGrantsRequest).cosmos.authz.v1beta1.QueryGrantsResponse"$���/cosmos/authz/v1beta1/grants�
GranterGrants/.cosmos.authz.v1beta1.QueryGranterGrantsRequest0.cosmos.authz.v1beta1.QueryGranterGrantsResponse"6���0./cosmos/authz/v1beta1/grants/granter/{granter}�
GranteeGrants/.cosmos.authz.v1beta1.QueryGranteeGrantsRequest0.cosmos.authz.v1beta1.QueryGranteeGrantsResponse"6���0./cosmos/authz/v1beta1/grants/grantee/{grantee}B&Z$github.com/cosmos/cosmos-sdk/x/authzbproto3'
        , true);

        static::$is_initialized = true;
    }
}

