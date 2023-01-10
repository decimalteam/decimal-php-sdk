<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/tx/v1beta1/tx.proto

namespace GPBMetadata\Cosmos\Tx\V1Beta1;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Cosmos\Crypto\Multisig\V1Beta1\Multisig::initOnce();
        \GPBMetadata\Cosmos\Base\V1Beta1\Coin::initOnce();
        \GPBMetadata\Cosmos\Tx\Signing\V1Beta1\Signing::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/tx/v1beta1/tx.protocosmos.tx.v1beta1-cosmos/crypto/multisig/v1beta1/multisig.protocosmos/base/v1beta1/coin.proto\'cosmos/tx/signing/v1beta1/signing.protogoogle/protobuf/any.protocosmos_proto/cosmos.proto"�
Tx-
body (2.cosmos.tx.v1beta1.TxBodyRbody8
	auth_info (2.cosmos.tx.v1beta1.AuthInfoRauthInfo

signatures (R
signatures"n
TxRaw

body_bytes (R	bodyBytes&
auth_info_bytes (RauthInfoBytes

signatures (R
signatures"�
SignDoc

body_bytes (R	bodyBytes&
auth_info_bytes (RauthInfoBytes
chain_id (	RchainId%
account_number (RaccountNumber"�
SignDocDirectAux

body_bytes (R	bodyBytes3

public_key (2.google.protobuf.AnyR	publicKey
chain_id (	RchainId%
account_number (RaccountNumber
sequence (Rsequence(
tip (2.cosmos.tx.v1beta1.TipRtip"�
TxBody0
messages (2.google.protobuf.AnyRmessages
memo (	Rmemo%
timeout_height (RtimeoutHeightB
extension_options� (2.google.protobuf.AnyRextensionOptionsZ
non_critical_extension_options� (2.google.protobuf.AnyRnonCriticalExtensionOptions"�
AuthInfo@
signer_infos (2.cosmos.tx.v1beta1.SignerInfoRsignerInfos(
fee (2.cosmos.tx.v1beta1.FeeRfee(
tip (2.cosmos.tx.v1beta1.TipRtip"�

SignerInfo3

public_key (2.google.protobuf.AnyR	publicKey8
	mode_info (2.cosmos.tx.v1beta1.ModeInfoRmodeInfo
sequence (Rsequence"�
ModeInfo<
single (2".cosmos.tx.v1beta1.ModeInfo.SingleH Rsingle9
multi (2!.cosmos.tx.v1beta1.ModeInfo.MultiH RmultiA
Single7
mode (2#.cosmos.tx.signing.v1beta1.SignModeRmode�
MultiK
bitarray (2/.cosmos.crypto.multisig.v1beta1.CompactBitArrayRbitarray:

mode_infos (2.cosmos.tx.v1beta1.ModeInfoR	modeInfosB
sum"�
Feec
amount (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsRamount
	gas_limit (RgasLimit.
payer (	BҴ-cosmos.AddressStringRpayer2
granter (	BҴ-cosmos.AddressStringRgranter"�
Tipc
amount (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsRamount0
tipper (	BҴ-cosmos.AddressStringRtipper"�
AuxSignerData2
address (	BҴ-cosmos.AddressStringRaddress>
sign_doc (2#.cosmos.tx.v1beta1.SignDocDirectAuxRsignDoc7
mode (2#.cosmos.tx.signing.v1beta1.SignModeRmode
sig (RsigB\'Z%github.com/cosmos/cosmos-sdk/types/txbproto3'
        , true);

        static::$is_initialized = true;
    }
}

