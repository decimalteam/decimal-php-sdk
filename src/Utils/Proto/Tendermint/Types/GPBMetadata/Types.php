<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/types/types.proto

namespace Tendermint\Types\GPBMetadata;

class Types
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \Tendermint\Crypto\GPBMetadata\Proof::initOnce();
        \Tendermint\Version\GPBMetadata\Types::initOnce();
        \Tendermint\Types\GPBMetadata\Validator::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
tendermint/types/types.prototendermint.typesgoogle/protobuf/timestamp.prototendermint/crypto/proof.prototendermint/version/types.proto tendermint/types/validator.proto"9
PartSetHeader
total (Rtotal
hash (Rhash"h
Part
index (Rindex
bytes (Rbytes4
proof (2.tendermint.crypto.ProofB�� Rproof"l
BlockID
hash (RhashM
part_set_header (2.tendermint.types.PartSetHeaderB�� RpartSetHeader"�
Header=
version (2.tendermint.version.ConsensusB�� Rversion&
chain_id (	B��ChainIDRchainId
height (Rheight8
time (2.google.protobuf.TimestampB�� ��RtimeC
last_block_id (2.tendermint.types.BlockIDB�� RlastBlockId(
last_commit_hash (RlastCommitHash
	data_hash (RdataHash\'
validators_hash (RvalidatorsHash0
next_validators_hash	 (RnextValidatorsHash%
consensus_hash
 (RconsensusHash
app_hash (RappHash*
last_results_hash (RlastResultsHash#
evidence_hash (RevidenceHash)
proposer_address (RproposerAddress"
Data
txs (Rtxs"�
Vote3
type (2.tendermint.types.SignedMsgTypeRtype
height (Rheight
round (RroundE
block_id (2.tendermint.types.BlockIDB�� ��BlockIDRblockIdB
	timestamp (2.google.protobuf.TimestampB�� ��R	timestamp+
validator_address (RvalidatorAddress\'
validator_index (RvalidatorIndex
	signature (R	signature"�
Commit
height (Rheight
round (RroundE
block_id (2.tendermint.types.BlockIDB�� ��BlockIDRblockIdA

signatures (2.tendermint.types.CommitSigB�� R
signatures"�
	CommitSigA
block_id_flag (2.tendermint.types.BlockIDFlagRblockIdFlag+
validator_address (RvalidatorAddressB
	timestamp (2.google.protobuf.TimestampB�� ��R	timestamp
	signature (R	signature"�
Proposal3
type (2.tendermint.types.SignedMsgTypeRtype
height (Rheight
round (Rround
	pol_round (RpolRoundE
block_id (2.tendermint.types.BlockIDB�� ��BlockIDRblockIdB
	timestamp (2.google.protobuf.TimestampB�� ��R	timestamp
	signature (R	signature"r
SignedHeader0
header (2.tendermint.types.HeaderRheader0
commit (2.tendermint.types.CommitRcommit"�

LightBlockC
signed_header (2.tendermint.types.SignedHeaderRsignedHeaderC
validator_set (2.tendermint.types.ValidatorSetRvalidatorSet"�
	BlockMetaE
block_id (2.tendermint.types.BlockIDB�� ��BlockIDRblockId

block_size (R	blockSize6
header (2.tendermint.types.HeaderB�� Rheader
num_txs (RnumTxs"j
TxProof
	root_hash (RrootHash
data (Rdata.
proof (2.tendermint.crypto.ProofRproof*�
BlockIDFlag1
BLOCK_ID_FLAG_UNKNOWN �� BlockIDFlagUnknown/
BLOCK_ID_FLAG_ABSENT�� BlockIDFlagAbsent/
BLOCK_ID_FLAG_COMMIT�� BlockIDFlagCommit)
BLOCK_ID_FLAG_NIL�� BlockIDFlagNil�� ��*�
SignedMsgType,
SIGNED_MSG_TYPE_UNKNOWN �� UnknownType,
SIGNED_MSG_TYPE_PREVOTE�� PrevoteType0
SIGNED_MSG_TYPE_PRECOMMIT�� PrecommitType.
SIGNED_MSG_TYPE_PROPOSAL �� ProposalType�� ��B�
com.tendermint.typesB
TypesProtoPZ7github.com/tendermint/tendermint/proto/tendermint/types�TTX�Tendermint.Types�Tendermint\\Types�Tendermint\\Types\\GPBMetadata�Tendermint::Typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

