<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1/query.proto

namespace GPBMetadata\Cosmos\Gov\V1;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cosmos\Base\Query\V1Beta1\Pagination::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Cosmos\Gov\V1\Gov::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/gov/v1/query.protocosmos.gov.v1google/api/annotations.protocosmos/gov/v1/gov.protocosmos_proto/cosmos.proto"7
QueryProposalRequest
proposal_id (R
proposalId"L
QueryProposalResponse3
proposal (2.cosmos.gov.v1.ProposalRproposal"�
QueryProposalsRequestF
proposal_status (2.cosmos.gov.v1.ProposalStatusRproposalStatus.
voter (	BҴ-cosmos.AddressStringRvoter6
	depositor (	BҴ-cosmos.AddressStringR	depositorF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryProposalsResponse5
	proposals (2.cosmos.gov.v1.ProposalR	proposalsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"c
QueryVoteRequest
proposal_id (R
proposalId.
voter (	BҴ-cosmos.AddressStringRvoter"<
QueryVoteResponse\'
vote (2.cosmos.gov.v1.VoteRvote"|
QueryVotesRequest
proposal_id (R
proposalIdF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryVotesResponse)
votes (2.cosmos.gov.v1.VoteRvotesG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"5
QueryParamsRequest
params_type (	R
paramsType"�
QueryParamsResponse@
voting_params (2.cosmos.gov.v1.VotingParamsRvotingParamsC
deposit_params (2.cosmos.gov.v1.DepositParamsRdepositParams=
tally_params (2.cosmos.gov.v1.TallyParamsRtallyParams"n
QueryDepositRequest
proposal_id (R
proposalId6
	depositor (	BҴ-cosmos.AddressStringR	depositor"H
QueryDepositResponse0
deposit (2.cosmos.gov.v1.DepositRdeposit"
QueryDepositsRequest
proposal_id (R
proposalIdF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryDepositsResponse2
deposits (2.cosmos.gov.v1.DepositRdepositsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination":
QueryTallyResultRequest
proposal_id (R
proposalId"L
QueryTallyResultResponse0
tally (2.cosmos.gov.v1.TallyResultRtally2�
Query�
Proposal#.cosmos.gov.v1.QueryProposalRequest$.cosmos.gov.v1.QueryProposalResponse".���(&/cosmos/gov/v1/proposals/{proposal_id}z
	Proposals$.cosmos.gov.v1.QueryProposalsRequest%.cosmos.gov.v1.QueryProposalsResponse" ���/cosmos/gov/v1/proposals�
Vote.cosmos.gov.v1.QueryVoteRequest .cosmos.gov.v1.QueryVoteResponse"<���64/cosmos/gov/v1/proposals/{proposal_id}/votes/{voter}�
Votes .cosmos.gov.v1.QueryVotesRequest!.cosmos.gov.v1.QueryVotesResponse"4���.,/cosmos/gov/v1/proposals/{proposal_id}/votes|
Params!.cosmos.gov.v1.QueryParamsRequest".cosmos.gov.v1.QueryParamsResponse"+���%#/cosmos/gov/v1/params/{params_type}�
Deposit".cosmos.gov.v1.QueryDepositRequest#.cosmos.gov.v1.QueryDepositResponse"C���=;/cosmos/gov/v1/proposals/{proposal_id}/deposits/{depositor}�
Deposits#.cosmos.gov.v1.QueryDepositsRequest$.cosmos.gov.v1.QueryDepositsResponse"7���1//cosmos/gov/v1/proposals/{proposal_id}/deposits�
TallyResult&.cosmos.gov.v1.QueryTallyResultRequest\'.cosmos.gov.v1.QueryTallyResultResponse"4���.,/cosmos/gov/v1/proposals/{proposal_id}/tallyB-Z+github.com/cosmos/cosmos-sdk/x/gov/types/v1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

