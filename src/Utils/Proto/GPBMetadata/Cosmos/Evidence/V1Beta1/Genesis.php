<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/evidence/v1beta1/genesis.proto

namespace GPBMetadata\Cosmos\Evidence\V1Beta1;

class Genesis
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%cosmos/evidence/v1beta1/genesis.protocosmos.evidence.v1beta1"@
GenesisState0
evidence (2.google.protobuf.AnyRevidenceB/Z-github.com/cosmos/cosmos-sdk/x/evidence/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

