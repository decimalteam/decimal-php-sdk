<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/crypto/secp256k1/keys.proto

namespace Cosmos\Crypto\Secp256k1\GPBMetadata;

class Keys
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
"cosmos/crypto/secp256k1/keys.protocosmos.crypto.secp256k1" 
PubKey
key (Rkey:�� "
PrivKey
key (RkeyB�
com.cosmos.crypto.secp256k1B	KeysProtoPZ2github.com/cosmos/cosmos-sdk/crypto/keys/secp256k1�CCS�Cosmos.Crypto.Secp256k1�Cosmos\\Crypto\\Secp256k1�#Cosmos\\Crypto\\Secp256k1\\GPBMetadata�Cosmos::Crypto::Secp256k1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

