<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/version/types.proto

namespace Tendermint\Version\GPBMetadata;

class Types
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
�
tendermint/version/types.prototendermint.version"=
App
protocol (Rprotocol
software (	Rsoftware"9
	Consensus
block (Rblock
app (Rapp:�B�
com.tendermint.versionB
TypesProtoPZ9github.com/tendermint/tendermint/proto/tendermint/version�TVX�Tendermint.Version�Tendermint\\Version�Tendermint\\Version\\GPBMetadata�Tendermint::Versionbproto3'
        , true);

        static::$is_initialized = true;
    }
}

