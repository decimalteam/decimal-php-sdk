<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/tx.proto

namespace GPBMetadata\Decimal\Validator\V1;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        \GPBMetadata\Cosmos\Base\V1Beta1\Coin::initOnce();
        \GPBMetadata\Cosmos\Msg\V1\Msg::initOnce();
        \GPBMetadata\Decimal\Validator\V1\Delegations::initOnce();
        \GPBMetadata\Decimal\Validator\V1\Params::initOnce();
        \GPBMetadata\Decimal\Validator\V1\Validator::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
decimal/validator/v1/tx.protodecimal.validator.v1google/protobuf/any.protogoogle/protobuf/timestamp.protocosmos_proto/cosmos.protocosmos/base/v1beta1/coin.protocosmos/msg/v1/msg.proto&decimal/validator/v1/delegations.proto!decimal/validator/v1/params.proto$decimal/validator/v1/validator.proto"�
MsgCreateValidatorI
description (2!.decimal.validator.v1.DescriptionB�� RdescriptionK

commission (2%.decimal.validator.v1.CommissionRatesB�� R
commission[
min_self_delegation (	B+�� ��cosmossdk.io/math.IntҴ-
cosmos.IntRminSelfDelegationE
delegator_address (	BҴ-cosmos.AddressStringRdelegatorAddressE
validator_address (	BҴ-cosmos.AddressStringRvalidatorAddressF
pubkey (2.google.protobuf.AnyBʴ-cosmos.crypto.PubKeyRpubkey5
value (2.cosmos.base.v1beta1.CoinB�� Rvalue:4�� � ��*delegator_address��*validator_address"
MsgCreateValidatorResponse"�
MsgEditValidatorI
description (2!.decimal.validator.v1.DescriptionB�� RdescriptionE
validator_address (	BҴ-cosmos.AddressStringRvalidatorAddressa
commission_rate (	B8��&github.com/cosmos/cosmos-sdk/types.DecҴ-
cosmos.DecRcommissionRateW
min_self_delegation (	B\'��cosmossdk.io/math.IntҴ-
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
Msgm
CreateValidator(.decimal.validator.v1.MsgCreateValidator0.decimal.validator.v1.MsgCreateValidatorResponseg
EditValidator&.decimal.validator.v1.MsgEditValidator..decimal.validator.v1.MsgEditValidatorResponseX
Delegate!.decimal.validator.v1.MsgDelegate).decimal.validator.v1.MsgDelegateResponsem
BeginRedelegate(.decimal.validator.v1.MsgBeginRedelegate0.decimal.validator.v1.MsgBeginRedelegateResponse^

Undelegate#.decimal.validator.v1.MsgUndelegate+.decimal.validator.v1.MsgUndelegateResponse�
CancelUnbondingDelegation2.decimal.validator.v1.MsgCancelUnbondingDelegation:.decimal.validator.v1.MsgCancelUnbondingDelegationResponseB;Z9bitbucket.org/decimalteam/go-smart-node/x/validator/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

