<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/legacy/v1/events.proto

namespace Decimal\Legacy\V1\GPBMetadata;

class Events
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
�	
decimal/legacy/v1/events.protodecimal.legacy.v1cosmos_proto/cosmos.protocosmos/base/v1beta1/coin.proto"�
EventReturnLegacyCoins;
legacy_owner (	BҴ-cosmos.AddressStringRlegacyOwner.
owner (	BҴ-cosmos.AddressStringRownera
coins (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsRcoins"�
EventReturnLegacySubToken;
legacy_owner (	BҴ-cosmos.AddressStringRlegacyOwner.
owner (	BҴ-cosmos.AddressStringRowner
denom (	Rdenom
id (	B��IDRid3
sub_token_ids (B��SubTokenIDsRsubTokenIds"�
EventReturnMultisigWallet;
legacy_owner (	BҴ-cosmos.AddressStringRlegacyOwner.
owner (	BҴ-cosmos.AddressStringRowner0
wallet (	BҴ-cosmos.AddressStringRwallet"�
EventReturnValidator;
legacy_owner (	BҴ-cosmos.AddressStringRlegacyOwner.
owner (	BҴ-cosmos.AddressStringRowner6
	validator (	BҴ-cosmos.AddressStringR	validatorB�
com.decimal.legacy.v1BEventsProtoPZ6bitbucket.org/decimalteam/go-smart-node/x/legacy/types�DLX�Decimal.Legacy.V1�Decimal\\Legacy\\V1�Decimal\\Legacy\\V1\\GPBMetadata�Decimal::Legacy::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

