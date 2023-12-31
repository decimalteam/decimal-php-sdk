<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/authz.proto

namespace Cosmos\Staking\V1beta1\GPBMetadata;

class Authz
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \CosmosProto\GPBMetadata\Cosmos::initOnce();
        \Cosmos\Base\V1beta1\GPBMetadata\Coin::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"cosmos/staking/v1beta1/authz.protocosmos.staking.v1beta1cosmos_proto/cosmos.protocosmos/base/v1beta1/coin.proto"�
StakeAuthorizatione

max_tokens (2.cosmos.base.v1beta1.CoinB+��\'github.com/cosmos/cosmos-sdk/types.CoinR	maxTokensV

allow_list (25.cosmos.staking.v1beta1.StakeAuthorization.ValidatorsH R	allowListT
	deny_list (25.cosmos.staking.v1beta1.StakeAuthorization.ValidatorsH RdenyListX
authorization_type (2).cosmos.staking.v1beta1.AuthorizationTypeRauthorizationType&

Validators
address (	Raddress:ʴ-AuthorizationB

validators*�
AuthorizationType"
AUTHORIZATION_TYPE_UNSPECIFIED 
AUTHORIZATION_TYPE_DELEGATE!
AUTHORIZATION_TYPE_UNDELEGATE!
AUTHORIZATION_TYPE_REDELEGATEB�
com.cosmos.staking.v1beta1B
AuthzProtoPZ,github.com/cosmos/cosmos-sdk/x/staking/types�CSX�Cosmos.Staking.V1beta1�Cosmos\\Staking\\V1beta1�"Cosmos\\Staking\\V1beta1\\GPBMetadata�Cosmos::Staking::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

