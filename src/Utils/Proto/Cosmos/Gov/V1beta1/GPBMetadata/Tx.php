<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1beta1/tx.proto

namespace Cosmos\Gov\V1beta1\GPBMetadata;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Cosmos\Base\V1beta1\GPBMetadata\Coin::initOnce();
        \Cosmos\Gov\V1beta1\GPBMetadata\Gov::initOnce();
        \CosmosProto\GPBMetadata\Cosmos::initOnce();
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/gov/v1beta1/tx.protocosmos.gov.v1beta1cosmos/gov/v1beta1/gov.protocosmos_proto/cosmos.protogogoproto/gogo.protogoogle/protobuf/any.proto"�
MsgSubmitProposal;
content (2.google.protobuf.AnyBʴ-ContentRcontent�
initial_deposit (2.cosmos.base.v1beta1.CoinBJ�� ��yaml:"initial_deposit"��(github.com/cosmos/cosmos-sdk/types.CoinsRinitialDeposit
proposer (	Rproposer:�� �� � ��  "c
MsgSubmitProposalResponseF
proposal_id (B%��proposal_id��yaml:"proposal_id"R
proposalId"�
MsgVoteF
proposal_id (B%��proposal_id��yaml:"proposal_id"R
proposalId
voter (	Rvoter6
option (2.cosmos.gov.v1beta1.VoteOptionRoption:�� �� � ��  "
MsgVoteResponse"�
MsgVoteWeighted7
proposal_id (B��yaml:"proposal_id"R
proposalId
voter (	RvoterF
options (2&.cosmos.gov.v1beta1.WeightedVoteOptionB�� Roptions:�� �� � ��  "
MsgVoteWeightedResponse"�

MsgDepositF
proposal_id (B%��proposal_id��yaml:"proposal_id"R
proposalId
	depositor (	R	depositorc
amount (2.cosmos.base.v1beta1.CoinB0�� ��(github.com/cosmos/cosmos-sdk/types.CoinsRamount:�� �� � ��  "
MsgDepositResponse2�
Msgf
SubmitProposal%.cosmos.gov.v1beta1.MsgSubmitProposal-.cosmos.gov.v1beta1.MsgSubmitProposalResponseH
Vote.cosmos.gov.v1beta1.MsgVote#.cosmos.gov.v1beta1.MsgVoteResponse`
VoteWeighted#.cosmos.gov.v1beta1.MsgVoteWeighted+.cosmos.gov.v1beta1.MsgVoteWeightedResponseQ
Deposit.cosmos.gov.v1beta1.MsgDeposit&.cosmos.gov.v1beta1.MsgDepositResponseB�
com.cosmos.gov.v1beta1BTxProtoPZ(github.com/cosmos/cosmos-sdk/x/gov/types�CGX�Cosmos.Gov.V1beta1�Cosmos\\Gov\\V1beta1�Cosmos\\Gov\\V1beta1\\GPBMetadata�Cosmos::Gov::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

