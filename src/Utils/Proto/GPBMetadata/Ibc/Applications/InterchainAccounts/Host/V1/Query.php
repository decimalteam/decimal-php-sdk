<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/interchain_accounts/host/v1/query.proto

namespace GPBMetadata\Ibc\Applications\InterchainAccounts\Host\V1;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Ibc\Applications\InterchainAccounts\Host\V1\Host::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8ibc/applications/interchain_accounts/host/v1/query.proto,ibc.applications.interchain_accounts.host.v17ibc/applications/interchain_accounts/host/v1/host.proto"
QueryParamsRequest"c
QueryParamsResponseL
params (24.ibc.applications.interchain_accounts.host.v1.ParamsRparams2�
Query�
Params@.ibc.applications.interchain_accounts.host.v1.QueryParamsRequestA.ibc.applications.interchain_accounts.host.v1.QueryParamsResponse"4���.,/ibc/apps/interchain_accounts/host/v1/paramsBLZJgithub.com/cosmos/ibc-go/v5/modules/apps/27-interchain-accounts/host/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

