<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/genutil/v1beta1/genesis.proto

namespace Cosmos\Genutil\V1beta1\GPBMetadata;

class Genesis
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
�
$cosmos/genutil/v1beta1/genesis.protocosmos.genutil.v1beta1"`
GenesisStateP
gen_txs (B7��gentxs��yaml:"gentxs"��encoding/json.RawMessageRgenTxsB�
com.cosmos.genutil.v1beta1BGenesisProtoPZ,github.com/cosmos/cosmos-sdk/x/genutil/types�CGX�Cosmos.Genutil.V1beta1�Cosmos\\Genutil\\V1beta1�"Cosmos\\Genutil\\V1beta1\\GPBMetadata�Cosmos::Genutil::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

