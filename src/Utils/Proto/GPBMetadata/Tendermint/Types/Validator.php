<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/types/validator.proto

namespace GPBMetadata\Tendermint\Types;

class Validator
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Tendermint\Crypto\Keys::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 tendermint/types/validator.prototendermint.typestendermint/crypto/keys.proto"�
ValidatorSet;

validators (2.tendermint.types.ValidatorR
validators7
proposer (2.tendermint.types.ValidatorRproposer,
total_voting_power (RtotalVotingPower"�
	Validator
address (Raddress;
pub_key (2.tendermint.crypto.PublicKeyB�� RpubKey!
voting_power (RvotingPower+
proposer_priority (RproposerPriority"k
SimpleValidator5
pub_key (2.tendermint.crypto.PublicKeyRpubKey!
voting_power (RvotingPowerB9Z7github.com/tendermint/tendermint/proto/tendermint/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

