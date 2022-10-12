<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/tx.proto

namespace GPBMetadata\Cosmos\Staking\V1Beta1;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        \GPBMetadata\Cosmos\Base\V1Beta1\Coin::initOnce();
        \GPBMetadata\Cosmos\Staking\V1Beta1\Staking::initOnce();
        \GPBMetadata\Cosmos\Msg\V1\Msg::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/staking/v1beta1/tx.protocosmos.staking.v1beta1google/protobuf/timestamp.protogogoproto/gogo.protocosmos_proto/cosmos.protocosmos/base/v1beta1/coin.proto$cosmos/staking/v1beta1/staking.protocosmos/msg/v1/msg.proto"�
MsgCreateValidatorK
description (2#.cosmos.staking.v1beta1.DescriptionB�� RdescriptionM

commission (2\'.cosmos.staking.v1beta1.CommissionRatesB�� R
commissionl
min_self_delegation (	B<�� ��&github.com/cosmos/cosmos-sdk/types.IntҴ-
cosmos.IntRminSelfDelegationE
delegator_address (	BҴ-cosmos.AddressStringRdelegatorAddressE
validator_address (	BҴ-cosmos.AddressStringRvalidatorAddressF
pubkey (2.google.protobuf.AnyBʴ-cosmos.crypto.PubKeyRpubkey5
value (2.cosmos.base.v1beta1.CoinB�� Rvalue:4�� � ��*delegator_address��*validator_address"
MsgCreateValidatorResponse"�
MsgEditValidatorK
description (2#.cosmos.staking.v1beta1.DescriptionB�� RdescriptionE
validator_address (	BҴ-cosmos.AddressStringRvalidatorAddressa
commission_rate (	B8��&github.com/cosmos/cosmos-sdk/types.DecҴ-
cosmos.DecRcommissionRateh
min_self_delegation (	B8��&github.com/cosmos/cosmos-sdk/types.IntҴ-
cosmos.IntRminSelfDelegation:�� � ��*validator_address"
MsgEditValidatorResponse"�
MsgDelegateE
delegator_address (	BҴ-cosmos.AddressStringRdelegatorAddressE
validator_address (	BҴ-cosmos.AddressStringRvalidatorAddress7
amount (2.cosmos.base.v1beta1.CoinB�� Ramount:�� � ��*delegator_address"
MsgDelegateResponse"�
MsgBeginRedelegateE
delegator_address (	BҴ-cosmos.AddressStringRdelegatorAddressL
validator_src_address (	BҴ-cosmos.AddressStringRvalidatorSrcAddressL
validator_dst_address (	BҴ-cosmos.AddressStringRvalidatorDstAddress7
amount (2.cosmos.base.v1beta1.CoinB�� Ramount:�� � ��*delegator_address"k
MsgBeginRedelegateResponseM
completion_time (2.google.protobuf.TimestampB�� ��RcompletionTime"�
MsgUndelegateE
delegator_address (	BҴ-cosmos.AddressStringRdelegatorAddressE
validator_address (	BҴ-cosmos.AddressStringRvalidatorAddress7
amount (2.cosmos.base.v1beta1.CoinB�� Ramount:�� � ��*delegator_address"f
MsgUndelegateResponseM
completion_time (2.google.protobuf.TimestampB�� ��RcompletionTime"�
MsgCancelUnbondingDelegationE
delegator_address (	BҴ-cosmos.AddressStringRdelegatorAddressE
validator_address (	BҴ-cosmos.AddressStringRvalidatorAddress7
amount (2.cosmos.base.v1beta1.CoinB�� Ramount\'
creation_height (RcreationHeight:�� � ��*delegator_address"&
$MsgCancelUnbondingDelegationResponse2�
Msgq
CreateValidator*.cosmos.staking.v1beta1.MsgCreateValidator2.cosmos.staking.v1beta1.MsgCreateValidatorResponsek
EditValidator(.cosmos.staking.v1beta1.MsgEditValidator0.cosmos.staking.v1beta1.MsgEditValidatorResponse\\
Delegate#.cosmos.staking.v1beta1.MsgDelegate+.cosmos.staking.v1beta1.MsgDelegateResponseq
BeginRedelegate*.cosmos.staking.v1beta1.MsgBeginRedelegate2.cosmos.staking.v1beta1.MsgBeginRedelegateResponseb

Undelegate%.cosmos.staking.v1beta1.MsgUndelegate-.cosmos.staking.v1beta1.MsgUndelegateResponse�
CancelUnbondingDelegation4.cosmos.staking.v1beta1.MsgCancelUnbondingDelegation<.cosmos.staking.v1beta1.MsgCancelUnbondingDelegationResponseB.Z,github.com/cosmos/cosmos-sdk/x/staking/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

