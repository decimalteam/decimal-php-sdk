<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/bank/v1beta1/tx.proto

namespace Cosmos\Bank\V1beta1\GPBMetadata;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \Cosmos\Base\V1beta1\GPBMetadata\Coin::initOnce();
        \Cosmos\Bank\V1beta1\GPBMetadata\Bank::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/bank/v1beta1/tx.protocosmos.bank.v1beta1cosmos/base/v1beta1/coin.protocosmos/bank/v1beta1/bank.proto"�
MsgSend:
from_address (	B��yaml:"from_address"RfromAddress4

to_address (	B��yaml:"to_address"R	toAddressc
amount (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsRamount:�� � "
MsgSendResponse"�
MsgMultiSend8
inputs (2.cosmos.bank.v1beta1.InputB�� Rinputs;
outputs (2.cosmos.bank.v1beta1.OutputB�� Routputs:� "
MsgMultiSendResponse2�
MsgJ
Send.cosmos.bank.v1beta1.MsgSend$.cosmos.bank.v1beta1.MsgSendResponseY
	MultiSend!.cosmos.bank.v1beta1.MsgMultiSend).cosmos.bank.v1beta1.MsgMultiSendResponseB�
com.cosmos.bank.v1beta1BTxProtoPZ)github.com/cosmos/cosmos-sdk/x/bank/types�CBX�Cosmos.Bank.V1beta1�Cosmos\\Bank\\V1beta1�Cosmos\\Bank\\V1beta1\\GPBMetadata�Cosmos::Bank::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

