<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/capability/v1beta1/capability.proto

namespace Cosmos\Capability\V1beta1\GPBMetadata;

class Capability
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
*cosmos/capability/v1beta1/capability.protocosmos.capability.v1beta1":

Capability&
index (B��yaml:"index"Rindex:�� "a
Owner)
module (	B��yaml:"module"Rmodule#
name (	B��yaml:"name"Rname:�� �� "R
CapabilityOwners>
owners (2 .cosmos.capability.v1beta1.OwnerB�� RownersB�
com.cosmos.capability.v1beta1BCapabilityProtoPZ/github.com/cosmos/cosmos-sdk/x/capability/types�CCX�Cosmos.Capability.V1beta1�Cosmos\\Capability\\V1beta1�%Cosmos\\Capability\\V1beta1\\GPBMetadata�Cosmos::Capability::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

