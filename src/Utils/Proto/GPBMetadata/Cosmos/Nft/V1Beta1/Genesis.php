<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/nft/v1beta1/genesis.proto

namespace GPBMetadata\Cosmos\Nft\V1Beta1;

class Genesis
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cosmos\Nft\V1Beta1\Nft::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 cosmos/nft/v1beta1/genesis.protocosmos.nft.v1beta1"x
GenesisState3
classes (2.cosmos.nft.v1beta1.ClassRclasses3
entries (2.cosmos.nft.v1beta1.EntryRentries"J
Entry
owner (	Rowner+
nfts (2.cosmos.nft.v1beta1.NFTRnftsB$Z"github.com/cosmos/cosmos-sdk/x/nftbproto3'
        , true);

        static::$is_initialized = true;
    }
}

