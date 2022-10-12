<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/group/v1/query.proto

namespace GPBMetadata\Cosmos\Group\V1;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Cosmos\Group\V1\Types::initOnce();
        \GPBMetadata\Cosmos\Base\Query\V1Beta1\Pagination::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        $pool->internalAddGeneratedFile(
            '
�,
cosmos/group/v1/query.protocosmos.group.v1google/api/annotations.protocosmos/group/v1/types.proto*cosmos/base/query/v1beta1/pagination.protocosmos_proto/cosmos.proto"2
QueryGroupInfoRequest
group_id (RgroupId"H
QueryGroupInfoResponse.
info (2.cosmos.group.v1.GroupInfoRinfo"Q
QueryGroupPolicyInfoRequest2
address (	BҴ-cosmos.AddressStringRaddress"T
QueryGroupPolicyInfoResponse4
info (2 .cosmos.group.v1.GroupPolicyInfoRinfo"}
QueryGroupMembersRequest
group_id (RgroupIdF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryGroupMembersResponse6
members (2.cosmos.group.v1.GroupMemberRmembersG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"�
QueryGroupsByAdminRequest.
admin (	BҴ-cosmos.AddressStringRadminF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryGroupsByAdminResponse2
groups (2.cosmos.group.v1.GroupInfoRgroupsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"�
 QueryGroupPoliciesByGroupRequest
group_id (RgroupIdF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
!QueryGroupPoliciesByGroupResponseG
group_policies (2 .cosmos.group.v1.GroupPolicyInfoRgroupPoliciesG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"�
 QueryGroupPoliciesByAdminRequest.
admin (	BҴ-cosmos.AddressStringRadminF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
!QueryGroupPoliciesByAdminResponseG
group_policies (2 .cosmos.group.v1.GroupPolicyInfoRgroupPoliciesG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"7
QueryProposalRequest
proposal_id (R
proposalId"N
QueryProposalResponse5
proposal (2.cosmos.group.v1.ProposalRproposal"�
"QueryProposalsByGroupPolicyRequest2
address (	BҴ-cosmos.AddressStringRaddressF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
#QueryProposalsByGroupPolicyResponse7
	proposals (2.cosmos.group.v1.ProposalR	proposalsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"r
QueryVoteByProposalVoterRequest
proposal_id (R
proposalId.
voter (	BҴ-cosmos.AddressStringRvoter"M
 QueryVoteByProposalVoterResponse)
vote (2.cosmos.group.v1.VoteRvote"�
QueryVotesByProposalRequest
proposal_id (R
proposalIdF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryVotesByProposalResponse+
votes (2.cosmos.group.v1.VoteRvotesG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"�
QueryVotesByVoterRequest.
voter (	BҴ-cosmos.AddressStringRvoterF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryVotesByVoterResponse+
votes (2.cosmos.group.v1.VoteRvotesG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"�
QueryGroupsByMemberRequest2
address (	BҴ-cosmos.AddressStringRaddressF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryGroupsByMemberResponse2
groups (2.cosmos.group.v1.GroupInfoRgroupsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination":
QueryTallyResultRequest
proposal_id (R
proposalId"T
QueryTallyResultResponse8
tally (2.cosmos.group.v1.TallyResultB�� Rtally2�
Query�
	GroupInfo&.cosmos.group.v1.QueryGroupInfoRequest\'.cosmos.group.v1.QueryGroupInfoResponse".���(&/cosmos/group/v1/group_info/{group_id}�
GroupPolicyInfo,.cosmos.group.v1.QueryGroupPolicyInfoRequest-.cosmos.group.v1.QueryGroupPolicyInfoResponse"4���.,/cosmos/group/v1/group_policy_info/{address}�
GroupMembers).cosmos.group.v1.QueryGroupMembersRequest*.cosmos.group.v1.QueryGroupMembersResponse"1���+)/cosmos/group/v1/group_members/{group_id}�
GroupsByAdmin*.cosmos.group.v1.QueryGroupsByAdminRequest+.cosmos.group.v1.QueryGroupsByAdminResponse"0���*(/cosmos/group/v1/groups_by_admin/{admin}�
GroupPoliciesByGroup1.cosmos.group.v1.QueryGroupPoliciesByGroupRequest2.cosmos.group.v1.QueryGroupPoliciesByGroupResponse";���53/cosmos/group/v1/group_policies_by_group/{group_id}�
GroupPoliciesByAdmin1.cosmos.group.v1.QueryGroupPoliciesByAdminRequest2.cosmos.group.v1.QueryGroupPoliciesByAdminResponse"8���20/cosmos/group/v1/group_policies_by_admin/{admin}�
Proposal%.cosmos.group.v1.QueryProposalRequest&.cosmos.group.v1.QueryProposalResponse"/���)\'/cosmos/group/v1/proposal/{proposal_id}�
ProposalsByGroupPolicy3.cosmos.group.v1.QueryProposalsByGroupPolicyRequest4.cosmos.group.v1.QueryProposalsByGroupPolicyResponse"<���64/cosmos/group/v1/proposals_by_group_policy/{address}�
VoteByProposalVoter0.cosmos.group.v1.QueryVoteByProposalVoterRequest1.cosmos.group.v1.QueryVoteByProposalVoterResponse"E���?=/cosmos/group/v1/vote_by_proposal_voter/{proposal_id}/{voter}�
VotesByProposal,.cosmos.group.v1.QueryVotesByProposalRequest-.cosmos.group.v1.QueryVotesByProposalResponse"8���20/cosmos/group/v1/votes_by_proposal/{proposal_id}�
VotesByVoter).cosmos.group.v1.QueryVotesByVoterRequest*.cosmos.group.v1.QueryVotesByVoterResponse"/���)\'/cosmos/group/v1/votes_by_voter/{voter}�
GroupsByMember+.cosmos.group.v1.QueryGroupsByMemberRequest,.cosmos.group.v1.QueryGroupsByMemberResponse"3���-+/cosmos/group/v1/groups_by_member/{address}�
TallyResult(.cosmos.group.v1.QueryTallyResultRequest).cosmos.group.v1.QueryTallyResultResponse"6���0./cosmos/group/v1/proposals/{proposal_id}/tallyB&Z$github.com/cosmos/cosmos-sdk/x/groupbproto3'
        , true);

        static::$is_initialized = true;
    }
}

