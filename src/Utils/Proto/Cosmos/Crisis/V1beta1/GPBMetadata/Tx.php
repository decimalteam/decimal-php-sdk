<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/crisis/v1beta1/tx.proto

namespace Cosmos\Crisis\V1beta1\GPBMetadata;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/crisis/v1beta1/tx.protocosmos.crisis.v1beta1"�
MsgVerifyInvariant
sender (	RsenderT
invariant_module_name (	B ��yaml:"invariant_module_name"RinvariantModuleNameC
invariant_route (	B��yaml:"invariant_route"RinvariantRoute:�� � "
MsgVerifyInvariantResponse2v
Msgo
VerifyInvariant).cosmos.crisis.v1beta1.MsgVerifyInvariant1.cosmos.crisis.v1beta1.MsgVerifyInvariantResponseB�
com.cosmos.crisis.v1beta1BTxProtoPZ+github.com/cosmos/cosmos-sdk/x/crisis/types�CCX�Cosmos.Crisis.V1beta1�Cosmos\\Crisis\\V1beta1�!Cosmos\\Crisis\\V1beta1\\GPBMetadata�Cosmos::Crisis::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

