<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/slashing/v1beta1/genesis.proto

namespace Cosmos\Slashing\V1beta1\GPBMetadata;

class Genesis
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \Cosmos\Slashing\V1beta1\GPBMetadata\Slashing::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%cosmos/slashing/v1beta1/genesis.protocosmos.slashing.v1beta1&cosmos/slashing/v1beta1/slashing.proto"�
GenesisState=
params (2.cosmos.slashing.v1beta1.ParamsB�� Rparamsg
signing_infos (2$.cosmos.slashing.v1beta1.SigningInfoB�� ��yaml:"signing_infos"RsigningInfosq
missed_blocks (2..cosmos.slashing.v1beta1.ValidatorMissedBlocksB�� ��yaml:"missed_blocks"RmissedBlocks"�
SigningInfo
address (	Raddress�
validator_signing_info (2-.cosmos.slashing.v1beta1.ValidatorSigningInfoB%�� ��yaml:"validator_signing_info"RvalidatorSigningInfo"�
ValidatorMissedBlocks
address (	Raddressg
missed_blocks (2$.cosmos.slashing.v1beta1.MissedBlockB�� ��yaml:"missed_blocks"RmissedBlocks";
MissedBlock
index (Rindex
missed (RmissedB�
com.cosmos.slashing.v1beta1BGenesisProtoPZ-github.com/cosmos/cosmos-sdk/x/slashing/types�CSX�Cosmos.Slashing.V1beta1�Cosmos\\Slashing\\V1beta1�#Cosmos\\Slashing\\V1beta1\\GPBMetadata�Cosmos::Slashing::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

