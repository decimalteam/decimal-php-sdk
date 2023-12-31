<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/staking.proto

namespace Cosmos\Staking\V1beta1\GPBMetadata;

class Staking
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \CosmosProto\GPBMetadata\Cosmos::initOnce();
        \Cosmos\Base\V1beta1\GPBMetadata\Coin::initOnce();
        \Tendermint\Types\GPBMetadata\Types::initOnce();
        $pool->internalAddGeneratedFile(
            '
�.
$cosmos/staking/v1beta1/staking.protocosmos.staking.v1beta1google/protobuf/any.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protocosmos_proto/cosmos.protocosmos/base/v1beta1/coin.prototendermint/types/types.proto"�
HistoricalInfo6
header (2.tendermint.types.HeaderB�� Rheader?
valset (2!.cosmos.staking.v1beta1.ValidatorB�� Rvalset"�
CommissionRatesB
rate (	B.�� ��&github.com/cosmos/cosmos-sdk/types.DecRrate\\
max_rate (	BA�� ��&github.com/cosmos/cosmos-sdk/types.Dec��yaml:"max_rate"RmaxRatep
max_change_rate (	BH�� ��&github.com/cosmos/cosmos-sdk/types.Dec��yaml:"max_change_rate"RmaxChangeRate:�� �"�

Commission\\
commission_rates (2\'.cosmos.staking.v1beta1.CommissionRatesB�� ��RcommissionRates[
update_time (2.google.protobuf.TimestampB�� ��yaml:"update_time"��R
updateTime:�� �"�
Description
moniker (	Rmoniker
identity (	Ridentity
website (	RwebsiteF
security_contact (	B��yaml:"security_contact"RsecurityContact
details (	Rdetails:�� �"�
	ValidatorF
operator_address (	B��yaml:"operator_address"RoperatorAddresst
consensus_pubkey (2.google.protobuf.AnyB3��yaml:"consensus_pubkey"ʴ-cosmos.crypto.PubKeyRconsensusPubkey
jailed (Rjailed:
status (2".cosmos.staking.v1beta1.BondStatusRstatusF
tokens (	B.�� ��&github.com/cosmos/cosmos-sdk/types.IntRtokenst
delegator_shares (	BI�� ��&github.com/cosmos/cosmos-sdk/types.Dec��yaml:"delegator_shares"RdelegatorSharesK
description (2#.cosmos.staking.v1beta1.DescriptionB�� RdescriptionF
unbonding_height (B��yaml:"unbonding_height"RunbondingHeightd
unbonding_time	 (2.google.protobuf.TimestampB!�� ��yaml:"unbonding_time"��RunbondingTimeH

commission
 (2".cosmos.staking.v1beta1.CommissionB�� R
commission|
min_self_delegation (	BL�� ��&github.com/cosmos/cosmos-sdk/types.Int��yaml:"min_self_delegation"RminSelfDelegation:�� �� � "6
ValAddresses
	addresses (	R	addresses:�� �� "�
DVPairI
delegator_address (	B��yaml:"delegator_address"RdelegatorAddressI
validator_address (	B��yaml:"validator_address"RvalidatorAddress:�� �� � "E
DVPairs:
pairs (2.cosmos.staking.v1beta1.DVPairB�� Rpairs"�

DVVTripletI
delegator_address (	B��yaml:"delegator_address"RdelegatorAddressT
validator_src_address (	B ��yaml:"validator_src_address"RvalidatorSrcAddressT
validator_dst_address (	B ��yaml:"validator_dst_address"RvalidatorDstAddress:�� �� � "S
DVVTripletsD
triplets (2".cosmos.staking.v1beta1.DVVTripletB�� Rtriplets"�

DelegationI
delegator_address (	B��yaml:"delegator_address"RdelegatorAddressI
validator_address (	B��yaml:"validator_address"RvalidatorAddressF
shares (	B.�� ��&github.com/cosmos/cosmos-sdk/types.DecRshares:�� �� � "�
UnbondingDelegationI
delegator_address (	B��yaml:"delegator_address"RdelegatorAddressI
validator_address (	B��yaml:"validator_address"RvalidatorAddressP
entries (20.cosmos.staking.v1beta1.UnbondingDelegationEntryB�� Rentries:�� �� � "�
UnbondingDelegationEntryC
creation_height (B��yaml:"creation_height"RcreationHeightg
completion_time (2.google.protobuf.TimestampB"�� ��yaml:"completion_time"��RcompletionTimeq
initial_balance (	BH�� ��&github.com/cosmos/cosmos-sdk/types.Int��yaml:"initial_balance"RinitialBalanceH
balance (	B.�� ��&github.com/cosmos/cosmos-sdk/types.IntRbalance:�� �"�
RedelegationEntryC
creation_height (B��yaml:"creation_height"RcreationHeightg
completion_time (2.google.protobuf.TimestampB"�� ��yaml:"completion_time"��RcompletionTimeq
initial_balance (	BH�� ��&github.com/cosmos/cosmos-sdk/types.Int��yaml:"initial_balance"RinitialBalanceM

shares_dst (	B.�� ��&github.com/cosmos/cosmos-sdk/types.DecR	sharesDst:�� �"�
RedelegationI
delegator_address (	B��yaml:"delegator_address"RdelegatorAddressT
validator_src_address (	B ��yaml:"validator_src_address"RvalidatorSrcAddressT
validator_dst_address (	B ��yaml:"validator_dst_address"RvalidatorDstAddressI
entries (2).cosmos.staking.v1beta1.RedelegationEntryB�� Rentries:�� �� � "�
Paramsc
unbonding_time (2.google.protobuf.DurationB!�� ��yaml:"unbonding_time"��RunbondingTime@
max_validators (B��yaml:"max_validators"RmaxValidators7
max_entries (B��yaml:"max_entries"R
maxEntriesL
historical_entries (B��yaml:"historical_entries"RhistoricalEntries4

bond_denom (	B��yaml:"bond_denom"R	bondDenom:�� �"�
DelegationResponseH

delegation (2".cosmos.staking.v1beta1.DelegationB�� R
delegation9
balance (2.cosmos.base.v1beta1.CoinB�� Rbalance:�� � "�
RedelegationEntryResponse^
redelegation_entry (2).cosmos.staking.v1beta1.RedelegationEntryB�� RredelegationEntryH
balance (	B.�� ��&github.com/cosmos/cosmos-sdk/types.IntRbalance:�"�
RedelegationResponseN
redelegation (2$.cosmos.staking.v1beta1.RedelegationB�� RredelegationQ
entries (21.cosmos.staking.v1beta1.RedelegationEntryResponseB�� Rentries:� "�
Poolo
not_bonded_tokens (	BC�� ��&github.com/cosmos/cosmos-sdk/types.Int��not_bonded_tokensRnotBondedTokens|
bonded_tokens (	BW�� ��&github.com/cosmos/cosmos-sdk/types.Int��bonded_tokens��yaml:"bonded_tokens"RbondedTokens:��*�

BondStatus,
BOND_STATUS_UNSPECIFIED �� Unspecified&
BOND_STATUS_UNBONDED�� Unbonded(
BOND_STATUS_UNBONDING�� 	Unbonding"
BOND_STATUS_BONDED
�� Bonded�� B�
com.cosmos.staking.v1beta1BStakingProtoPZ,github.com/cosmos/cosmos-sdk/x/staking/types�CSX�Cosmos.Staking.V1beta1�Cosmos\\Staking\\V1beta1�"Cosmos\\Staking\\V1beta1\\GPBMetadata�Cosmos::Staking::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

