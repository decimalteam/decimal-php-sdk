<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/interchain_accounts/host/v1/host.proto

namespace GPBMetadata\Ibc\Applications\InterchainAccounts\Host\V1;

class Host
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7ibc/applications/interchain_accounts/host/v1/host.proto,ibc.applications.interchain_accounts.host.v1"�
Params:
host_enabled (B��yaml:"host_enabled"RhostEnabled@
allow_messages (	B��yaml:"allow_messages"RallowMessagesBLZJgithub.com/cosmos/ibc-go/v5/modules/apps/27-interchain-accounts/host/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

