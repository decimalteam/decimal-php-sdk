<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/crypto/keys.proto

namespace GPBMetadata\Tendermint\Crypto;

class Keys
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
�
tendermint/crypto/keys.prototendermint.crypto"X
	PublicKey
ed25519 (H Red25519
	secp256k1 (H R	secp256k1:��B
sumB:Z8github.com/tendermint/tendermint/proto/tendermint/cryptobproto3'
        , true);

        static::$is_initialized = true;
    }
}

