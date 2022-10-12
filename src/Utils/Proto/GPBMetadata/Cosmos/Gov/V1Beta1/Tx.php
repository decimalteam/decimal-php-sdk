<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1beta1/tx.proto

namespace GPBMetadata\Cosmos\Gov\V1Beta1;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cosmos\Base\V1Beta1\Coin::initOnce();
        \GPBMetadata\Cosmos\Gov\V1Beta1\Gov::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Cosmos\Msg\V1\Msg::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/gov/v1beta1/tx.protocosmos.gov.v1beta1cosmos/gov/v1beta1/gov.protocosmos_proto/cosmos.protogogoproto/gogo.protogoogle/protobuf/any.protocosmos/msg/v1/msg.proto"�
MsgSubmitProposal;
content (2.google.protobuf.AnyBʴ-ContentRcontentt
initial_deposit (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsRinitialDeposit4
proposer (	BҴ-cosmos.AddressStringRproposer:�� �� � ��  ��*proposer"M
MsgSubmitProposalResponse0
proposal_id (B��proposal_idR
proposalId"�
MsgVote
proposal_id (R
proposalId.
voter (	BҴ-cosmos.AddressStringRvoter6
option (2.cosmos.gov.v1beta1.VoteOptionRoption:�� �� � ��  ��*voter"
MsgVoteResponse"�
MsgVoteWeighted0
proposal_id (B��proposal_idR
proposalId.
voter (	BҴ-cosmos.AddressStringRvoterF
options (2&.cosmos.gov.v1beta1.WeightedVoteOptionB�� Roptions:�� �� � ��  ��*voter"
MsgVoteWeightedResponse"�

MsgDeposit0
proposal_id (B��proposal_idR
proposalId6
	depositor (	BҴ-cosmos.AddressStringR	depositorc
amount (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsRamount:�� �� � ��  ��*	depositor"
MsgDepositResponse2�
Msgf
SubmitProposal%.cosmos.gov.v1beta1.MsgSubmitProposal-.cosmos.gov.v1beta1.MsgSubmitProposalResponseH
Vote.cosmos.gov.v1beta1.MsgVote#.cosmos.gov.v1beta1.MsgVoteResponse`
VoteWeighted#.cosmos.gov.v1beta1.MsgVoteWeighted+.cosmos.gov.v1beta1.MsgVoteWeightedResponseQ
Deposit.cosmos.gov.v1beta1.MsgDeposit&.cosmos.gov.v1beta1.MsgDepositResponseB2Z0github.com/cosmos/cosmos-sdk/x/gov/types/v1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

