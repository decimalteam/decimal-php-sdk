<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/multisig/v1/tx.proto

namespace Decimal\Multisig\V1\GPBMetadata;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \CosmosProto\GPBMetadata\Cosmos::initOnce();
        \Cosmos\Base\V1beta1\GPBMetadata\Coin::initOnce();
        \Cosmos\Msg\V1\GPBMetadata\Msg::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

decimal/multisig/v1/tx.protodecimal.multisig.v1cosmos_proto/cosmos.protocosmos/base/v1beta1/coin.protocosmos/msg/v1/msg.proto"�
MsgCreateWallet0
sender (	BҴ-cosmos.AddressStringRsender
owners (	Rowners
weights (Rweights
	threshold (R	threshold:��*sender"K
MsgCreateWalletResponse0
wallet (	BҴ-cosmos.AddressStringRwallet"�
MsgCreateTransaction0
sender (	BҴ-cosmos.AddressStringRsender0
wallet (	BҴ-cosmos.AddressStringRwallet4
receiver (	BҴ-cosmos.AddressStringRreceivera
coins (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsRcoins:��*sender"6
MsgCreateTransactionResponse
id (	B��IDRid"k
MsgSignTransaction0
sender (	BҴ-cosmos.AddressStringRsender
id (	B��IDRid:��*sender"
MsgSignTransactionResponse2�
Msgb
CreateWallet$.decimal.multisig.v1.MsgCreateWallet,.decimal.multisig.v1.MsgCreateWalletResponseq
CreateTransaction).decimal.multisig.v1.MsgCreateTransaction1.decimal.multisig.v1.MsgCreateTransactionResponsek
SignTransaction\'.decimal.multisig.v1.MsgSignTransaction/.decimal.multisig.v1.MsgSignTransactionResponseB�
com.decimal.multisig.v1BTxProtoPZ8bitbucket.org/decimalteam/go-smart-node/x/multisig/types�DMX�Decimal.Multisig.V1�Decimal\\Multisig\\V1�Decimal\\Multisig\\V1\\GPBMetadata�Decimal::Multisig::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

