<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/interchain_accounts/v1/metadata.proto

namespace GPBMetadata\Ibc\Applications\InterchainAccounts\V1;

class Metadata
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
�
6ibc/applications/interchain_accounts/v1/metadata.proto\'ibc.applications.interchain_accounts.v1"�
Metadata
version (	Rversion]
controller_connection_id (	B#��yaml:"controller_connection_id"RcontrollerConnectionIdK
host_connection_id (	B��yaml:"host_connection_id"RhostConnectionId
address (	Raddress
encoding (	Rencoding
tx_type (	RtxTypeBGZEgithub.com/cosmos/ibc-go/v5/modules/apps/27-interchain-accounts/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

