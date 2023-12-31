<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/tx/signing/v1beta1/signing.proto

namespace GPBMetadata\Cosmos\Tx\Signing\V1Beta1;

class Signing
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cosmos\Crypto\Multisig\V1Beta1\Multisig::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
\'cosmos/tx/signing/v1beta1/signing.protocosmos.tx.signing.v1beta1google/protobuf/any.proto"f
SignatureDescriptorsN

signatures (2..cosmos.tx.signing.v1beta1.SignatureDescriptorR
signatures"�
SignatureDescriptor3

public_key (2.google.protobuf.AnyR	publicKeyG
data (23.cosmos.tx.signing.v1beta1.SignatureDescriptor.DataRdata
sequence (Rsequence�
DataT
single (2:.cosmos.tx.signing.v1beta1.SignatureDescriptor.Data.SingleH RsingleQ
multi (29.cosmos.tx.signing.v1beta1.SignatureDescriptor.Data.MultiH Rmulti_
Single7
mode (2#.cosmos.tx.signing.v1beta1.SignModeRmode
	signature (R	signature�
MultiK
bitarray (2/.cosmos.crypto.multisig.v1beta1.CompactBitArrayRbitarrayS

signatures (23.cosmos.tx.signing.v1beta1.SignatureDescriptor.DataR
signaturesB
sum*�
SignMode
SIGN_MODE_UNSPECIFIED 
SIGN_MODE_DIRECT
SIGN_MODE_TEXTUAL
SIGN_MODE_DIRECT_AUX
SIGN_MODE_LEGACY_AMINO_JSON
SIGN_MODE_EIP_191�B/Z-github.com/cosmos/cosmos-sdk/types/tx/signingbproto3'
        , true);

        static::$is_initialized = true;
    }
}

