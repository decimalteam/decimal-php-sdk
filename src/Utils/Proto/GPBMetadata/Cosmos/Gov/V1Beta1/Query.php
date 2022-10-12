<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1beta1/query.proto

namespace GPBMetadata\Cosmos\Gov\V1Beta1;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cosmos\Base\Query\V1Beta1\Pagination::initOnce();
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Cosmos\Gov\V1Beta1\Gov::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/gov/v1beta1/query.protocosmos.gov.v1beta1gogoproto/gogo.protogoogle/api/annotations.protocosmos/gov/v1beta1/gov.protocosmos_proto/cosmos.proto"7
QueryProposalRequest
proposal_id (R
proposalId"W
QueryProposalResponse>
proposal (2.cosmos.gov.v1beta1.ProposalB�� Rproposal"�
QueryProposalsRequestK
proposal_status (2".cosmos.gov.v1beta1.ProposalStatusRproposalStatus.
voter (	BҴ-cosmos.AddressStringRvoter6
	depositor (	BҴ-cosmos.AddressStringR	depositorF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination:�� � "�
QueryProposalsResponse@
	proposals (2.cosmos.gov.v1beta1.ProposalB�� R	proposalsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"m
QueryVoteRequest
proposal_id (R
proposalId.
voter (	BҴ-cosmos.AddressStringRvoter:�� � "G
QueryVoteResponse2
vote (2.cosmos.gov.v1beta1.VoteB�� Rvote"|
QueryVotesRequest
proposal_id (R
proposalIdF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryVotesResponse4
votes (2.cosmos.gov.v1beta1.VoteB�� RvotesG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"5
QueryParamsRequest
params_type (	R
paramsType"�
QueryParamsResponseK
voting_params (2 .cosmos.gov.v1beta1.VotingParamsB�� RvotingParamsN
deposit_params (2!.cosmos.gov.v1beta1.DepositParamsB�� RdepositParamsH
tally_params (2.cosmos.gov.v1beta1.TallyParamsB�� RtallyParams"x
QueryDepositRequest
proposal_id (R
proposalId6
	depositor (	BҴ-cosmos.AddressStringR	depositor:�� � "S
QueryDepositResponse;
deposit (2.cosmos.gov.v1beta1.DepositB�� Rdeposit"
QueryDepositsRequest
proposal_id (R
proposalIdF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryDepositsResponse=
deposits (2.cosmos.gov.v1beta1.DepositB�� RdepositsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination":
QueryTallyResultRequest
proposal_id (R
proposalId"W
QueryTallyResultResponse;
tally (2.cosmos.gov.v1beta1.TallyResultB�� Rtally2�	
Query�
Proposal(.cosmos.gov.v1beta1.QueryProposalRequest).cosmos.gov.v1beta1.QueryProposalResponse"3���-+/cosmos/gov/v1beta1/proposals/{proposal_id}�
	Proposals).cosmos.gov.v1beta1.QueryProposalsRequest*.cosmos.gov.v1beta1.QueryProposalsResponse"%���/cosmos/gov/v1beta1/proposals�
Vote$.cosmos.gov.v1beta1.QueryVoteRequest%.cosmos.gov.v1beta1.QueryVoteResponse"A���;9/cosmos/gov/v1beta1/proposals/{proposal_id}/votes/{voter}�
Votes%.cosmos.gov.v1beta1.QueryVotesRequest&.cosmos.gov.v1beta1.QueryVotesResponse"9���31/cosmos/gov/v1beta1/proposals/{proposal_id}/votes�
Params&.cosmos.gov.v1beta1.QueryParamsRequest\'.cosmos.gov.v1beta1.QueryParamsResponse"0���*(/cosmos/gov/v1beta1/params/{params_type}�
Deposit\'.cosmos.gov.v1beta1.QueryDepositRequest(.cosmos.gov.v1beta1.QueryDepositResponse"H���B@/cosmos/gov/v1beta1/proposals/{proposal_id}/deposits/{depositor}�
Deposits(.cosmos.gov.v1beta1.QueryDepositsRequest).cosmos.gov.v1beta1.QueryDepositsResponse"<���64/cosmos/gov/v1beta1/proposals/{proposal_id}/deposits�
TallyResult+.cosmos.gov.v1beta1.QueryTallyResultRequest,.cosmos.gov.v1beta1.QueryTallyResultResponse"9���31/cosmos/gov/v1beta1/proposals/{proposal_id}/tallyB2Z0github.com/cosmos/cosmos-sdk/x/gov/types/v1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

