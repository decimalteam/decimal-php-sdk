<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/types/v1/account.proto

namespace GPBMetadata\Ethermint\Types\V1;

class Account
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cosmos\Auth\V1Beta1\Auth::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 ethermint/types/v1/account.protoethermint.types.v1cosmos_proto/cosmos.protogogoproto/gogo.proto"�

EthAccount`
base_account (2 .cosmos.auth.v1beta1.BaseAccountB����yaml:"base_account"RbaseAccount1
	code_hash (	B��yaml:"code_hash"RcodeHash:B�� �� � ʴ-2github.com/cosmos/cosmos-sdk/x/auth/types.AccountIB"Z github.com/evmos/ethermint/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

