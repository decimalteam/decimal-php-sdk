<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace GPBMetadata\Tendermint\Abci;

class Types
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Tendermint\Crypto\Proof::initOnce();
        \GPBMetadata\Tendermint\Types\Types::initOnce();
        \GPBMetadata\Tendermint\Crypto\Keys::initOnce();
        \GPBMetadata\Tendermint\Types\Params::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        $pool->internalAddGeneratedFile(
            '
�G
tendermint/abci/types.prototendermint.abcitendermint/types/types.prototendermint/crypto/keys.prototendermint/types/params.protogoogle/protobuf/timestamp.protogogoproto/gogo.proto"�
Request2
echo (2.tendermint.abci.RequestEchoH Recho5
flush (2.tendermint.abci.RequestFlushH Rflush2
info (2.tendermint.abci.RequestInfoH RinfoB

set_option (2!.tendermint.abci.RequestSetOptionH R	setOptionB

init_chain (2!.tendermint.abci.RequestInitChainH R	initChain5
query (2.tendermint.abci.RequestQueryH RqueryE
begin_block (2".tendermint.abci.RequestBeginBlockH R
beginBlock<
check_tx (2.tendermint.abci.RequestCheckTxH RcheckTxB

deliver_tx	 (2!.tendermint.abci.RequestDeliverTxH R	deliverTx?
	end_block
 (2 .tendermint.abci.RequestEndBlockH RendBlock8
commit (2.tendermint.abci.RequestCommitH RcommitN
list_snapshots (2%.tendermint.abci.RequestListSnapshotsH RlistSnapshotsN
offer_snapshot (2%.tendermint.abci.RequestOfferSnapshotH RofferSnapshot[
load_snapshot_chunk (2).tendermint.abci.RequestLoadSnapshotChunkH RloadSnapshotChunk^
apply_snapshot_chunk (2*.tendermint.abci.RequestApplySnapshotChunkH RapplySnapshotChunkB
value"\'
RequestEcho
message (	Rmessage"
RequestFlush"m
RequestInfo
version (	Rversion#
block_version (RblockVersion
p2p_version (R
p2pVersion":
RequestSetOption
key (	Rkey
value (	Rvalue"�
RequestInitChain8
time (2.google.protobuf.TimestampB�� ��Rtime
chain_id (	RchainIdK
consensus_params (2 .tendermint.abci.ConsensusParamsRconsensusParamsF

validators (2 .tendermint.abci.ValidatorUpdateB�� R
validators&
app_state_bytes (RappStateBytes%
initial_height (RinitialHeight"d
RequestQuery
data (Rdata
path (	Rpath
height (Rheight
prove (Rprove"�
RequestBeginBlock
hash (Rhash6
header (2.tendermint.types.HeaderB�� RheaderO
last_commit_info (2.tendermint.abci.LastCommitInfoB�� RlastCommitInfoR
byzantine_validators (2.tendermint.abci.EvidenceB�� RbyzantineValidators"R
RequestCheckTx
tx (Rtx0
type (2.tendermint.abci.CheckTxTypeRtype""
RequestDeliverTx
tx (Rtx")
RequestEndBlock
height (Rheight"
RequestCommit"
RequestListSnapshots"h
RequestOfferSnapshot5
snapshot (2.tendermint.abci.SnapshotRsnapshot
app_hash (RappHash"`
RequestLoadSnapshotChunk
height (Rheight
format (Rformat
chunk (Rchunk"_
RequestApplySnapshotChunk
index (Rindex
chunk (Rchunk
sender (	Rsender"�
ResponseB
	exception (2".tendermint.abci.ResponseExceptionH R	exception3
echo (2.tendermint.abci.ResponseEchoH Recho6
flush (2.tendermint.abci.ResponseFlushH Rflush3
info (2.tendermint.abci.ResponseInfoH RinfoC

set_option (2".tendermint.abci.ResponseSetOptionH R	setOptionC

init_chain (2".tendermint.abci.ResponseInitChainH R	initChain6
query (2.tendermint.abci.ResponseQueryH RqueryF
begin_block (2#.tendermint.abci.ResponseBeginBlockH R
beginBlock=
check_tx	 (2 .tendermint.abci.ResponseCheckTxH RcheckTxC

deliver_tx
 (2".tendermint.abci.ResponseDeliverTxH R	deliverTx@
	end_block (2!.tendermint.abci.ResponseEndBlockH RendBlock9
commit (2.tendermint.abci.ResponseCommitH RcommitO
list_snapshots (2&.tendermint.abci.ResponseListSnapshotsH RlistSnapshotsO
offer_snapshot (2&.tendermint.abci.ResponseOfferSnapshotH RofferSnapshot\\
load_snapshot_chunk (2*.tendermint.abci.ResponseLoadSnapshotChunkH RloadSnapshotChunk_
apply_snapshot_chunk (2+.tendermint.abci.ResponseApplySnapshotChunkH RapplySnapshotChunkB
value")
ResponseException
error (	Rerror"(
ResponseEcho
message (	Rmessage"
ResponseFlush"�
ResponseInfo
data (	Rdata
version (	Rversion
app_version (R
appVersion*
last_block_height (RlastBlockHeight-
last_block_app_hash (RlastBlockAppHash"M
ResponseSetOption
code (Rcode
log (	Rlog
info (	Rinfo"�
ResponseInitChainK
consensus_params (2 .tendermint.abci.ConsensusParamsRconsensusParamsF

validators (2 .tendermint.abci.ValidatorUpdateB�� R
validators
app_hash (RappHash"�
ResponseQuery
code (Rcode
log (	Rlog
info (	Rinfo
index (Rindex
key (Rkey
value (Rvalue8
	proof_ops (2.tendermint.crypto.ProofOpsRproofOps
height	 (Rheight
	codespace
 (	R	codespace"^
ResponseBeginBlockH
events (2.tendermint.abci.EventB�� ��events,omitemptyRevents"�
ResponseCheckTx
code (Rcode
data (Rdata
log (	Rlog
info (	Rinfo

gas_wanted (R
gas_wanted
gas_used (Rgas_usedH
events (2.tendermint.abci.EventB�� ��events,omitemptyRevents
	codespace (	R	codespace"�
ResponseDeliverTx
code (Rcode
data (Rdata
log (	Rlog
info (	Rinfo

gas_wanted (R
gas_wanted
gas_used (Rgas_usedH
events (2.tendermint.abci.EventB�� ��events,omitemptyRevents
	codespace (	R	codespace"�
ResponseEndBlockS
validator_updates (2 .tendermint.abci.ValidatorUpdateB�� RvalidatorUpdatesX
consensus_param_updates (2 .tendermint.abci.ConsensusParamsRconsensusParamUpdatesH
events (2.tendermint.abci.EventB�� ��events,omitemptyRevents"I
ResponseCommit
data (Rdata#
retain_height (RretainHeight"P
ResponseListSnapshots7
	snapshots (2.tendermint.abci.SnapshotR	snapshots"�
ResponseOfferSnapshotE
result (2-.tendermint.abci.ResponseOfferSnapshot.ResultRresult"^
Result
UNKNOWN 

ACCEPT	
ABORT

REJECT
REJECT_FORMAT
REJECT_SENDER"1
ResponseLoadSnapshotChunk
chunk (Rchunk"�
ResponseApplySnapshotChunkJ
result (22.tendermint.abci.ResponseApplySnapshotChunk.ResultRresult%
refetch_chunks (RrefetchChunks%
reject_senders (	RrejectSenders"`
Result
UNKNOWN 

ACCEPT	
ABORT	
RETRY
RETRY_SNAPSHOT
REJECT_SNAPSHOT"�
ConsensusParams2
block (2.tendermint.abci.BlockParamsRblock<
evidence (2 .tendermint.types.EvidenceParamsRevidence?
	validator (2!.tendermint.types.ValidatorParamsR	validator9
version (2.tendermint.types.VersionParamsRversion"C
BlockParams
	max_bytes (RmaxBytes
max_gas (RmaxGas"]
LastCommitInfo
round (Rround5
votes (2.tendermint.abci.VoteInfoB�� Rvotes"z
Event
type (	Rtype]

attributes (2.tendermint.abci.EventAttributeB�� ��attributes,omitemptyR
attributes"N
EventAttribute
key (Rkey
value (Rvalue
index (Rindex"�
TxResult
height (Rheight
index (Rindex
tx (Rtx@
result (2".tendermint.abci.ResponseDeliverTxB�� Rresult";
	Validator
address (Raddress
power (Rpower"d
ValidatorUpdate;
pub_key (2.tendermint.crypto.PublicKeyB�� RpubKey
power (Rpower"v
VoteInfo>
	validator (2.tendermint.abci.ValidatorB�� R	validator*
signed_last_block (RsignedLastBlock"�
Evidence1
type (2.tendermint.abci.EvidenceTypeRtype>
	validator (2.tendermint.abci.ValidatorB�� R	validator
height (Rheight8
time (2.google.protobuf.TimestampB�� ��Rtime,
total_voting_power (RtotalVotingPower"�
Snapshot
height (Rheight
format (Rformat
chunks (Rchunks
hash (Rhash
metadata (Rmetadata*9
CheckTxType
NEW �� New
RECHECK�� Recheck*H
EvidenceType
UNKNOWN 
DUPLICATE_VOTE
LIGHT_CLIENT_ATTACK2�

ABCIApplicationC
Echo.tendermint.abci.RequestEcho.tendermint.abci.ResponseEchoF
Flush.tendermint.abci.RequestFlush.tendermint.abci.ResponseFlushC
Info.tendermint.abci.RequestInfo.tendermint.abci.ResponseInfoR
	SetOption!.tendermint.abci.RequestSetOption".tendermint.abci.ResponseSetOptionR
	DeliverTx!.tendermint.abci.RequestDeliverTx".tendermint.abci.ResponseDeliverTxL
CheckTx.tendermint.abci.RequestCheckTx .tendermint.abci.ResponseCheckTxF
Query.tendermint.abci.RequestQuery.tendermint.abci.ResponseQueryI
Commit.tendermint.abci.RequestCommit.tendermint.abci.ResponseCommitR
	InitChain!.tendermint.abci.RequestInitChain".tendermint.abci.ResponseInitChainU

BeginBlock".tendermint.abci.RequestBeginBlock#.tendermint.abci.ResponseBeginBlockO
EndBlock .tendermint.abci.RequestEndBlock!.tendermint.abci.ResponseEndBlock^
ListSnapshots%.tendermint.abci.RequestListSnapshots&.tendermint.abci.ResponseListSnapshots^
OfferSnapshot%.tendermint.abci.RequestOfferSnapshot&.tendermint.abci.ResponseOfferSnapshotj
LoadSnapshotChunk).tendermint.abci.RequestLoadSnapshotChunk*.tendermint.abci.ResponseLoadSnapshotChunkm
ApplySnapshotChunk*.tendermint.abci.RequestApplySnapshotChunk+.tendermint.abci.ResponseApplySnapshotChunkB-Z+github.com/tendermint/tendermint/abci/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

