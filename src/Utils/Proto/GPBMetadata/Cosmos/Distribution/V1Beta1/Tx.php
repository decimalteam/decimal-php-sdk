<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/distribution/v1beta1/tx.proto

namespace GPBMetadata\Cosmos\Distribution\V1Beta1;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Cosmos\Base\V1Beta1\Coin::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        \GPBMetadata\Cosmos\Msg\V1\Msg::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$cosmos/distribution/v1beta1/tx.protocosmos.distribution.v1beta1cosmos/base/v1beta1/coin.protocosmos_proto/cosmos.protocosmos/msg/v1/msg.proto"�
MsgSetWithdrawAddressE
delegator_address (	BҴ-cosmos.AddressStringRdelegatorAddressC
withdraw_address (	BҴ-cosmos.AddressStringRwithdrawAddress:�� � ��*delegator_address"
MsgSetWithdrawAddressResponse"�
MsgWithdrawDelegatorRewardE
delegator_address (	BҴ-cosmos.AddressStringRdelegatorAddressE
validator_address (	BҴ-cosmos.AddressStringRvalidatorAddress:�� � ��*delegator_address"�
"MsgWithdrawDelegatorRewardResponsec
amount (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsRamount"�
MsgWithdrawValidatorCommissionE
validator_address (	BҴ-cosmos.AddressStringRvalidatorAddress:�� � ��*validator_address"�
&MsgWithdrawValidatorCommissionResponsec
amount (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsRamount"�
MsgFundCommunityPoolc
amount (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsRamount6
	depositor (	BҴ-cosmos.AddressStringR	depositor:�� � ��*	depositor"
MsgFundCommunityPoolResponse2�
Msg�
SetWithdrawAddress2.cosmos.distribution.v1beta1.MsgSetWithdrawAddress:.cosmos.distribution.v1beta1.MsgSetWithdrawAddressResponse�
WithdrawDelegatorReward7.cosmos.distribution.v1beta1.MsgWithdrawDelegatorReward?.cosmos.distribution.v1beta1.MsgWithdrawDelegatorRewardResponse�
WithdrawValidatorCommission;.cosmos.distribution.v1beta1.MsgWithdrawValidatorCommissionC.cosmos.distribution.v1beta1.MsgWithdrawValidatorCommissionResponse�
FundCommunityPool1.cosmos.distribution.v1beta1.MsgFundCommunityPool9.cosmos.distribution.v1beta1.MsgFundCommunityPoolResponseB7Z1github.com/cosmos/cosmos-sdk/x/distribution/types��bproto3'
        , true);

        static::$is_initialized = true;
    }
}

