<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/tx.proto

namespace GPBMetadata\Ethermint\Evm\V1;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        \GPBMetadata\Ethermint\Evm\V1\Evm::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
ethermint/evm/v1/tx.protoethermint.evm.v1google/api/annotations.protogoogle/protobuf/any.protocosmos_proto/cosmos.protoethermint/evm/v1/evm.proto"�
MsgEthereumTx(
data (2.google.protobuf.AnyRdata
size (B��-Rsize
hash (	B��rlp:"-"Rhash
from (	Rfrom:�� "�
LegacyTx
nonce (RnonceG
	gas_price (	B*��&github.com/cosmos/cosmos-sdk/types.IntRgasPrice
gas (B��GasLimitRgas
to (	RtoJ
value (	B4��&github.com/cosmos/cosmos-sdk/types.Int��AmountRvalue
data (Rdata
v (Rv
r (Rr
s	 (Rs:�� ʴ-TxData"�
AccessListTx[
chain_id (	B@��&github.com/cosmos/cosmos-sdk/types.Int��ChainID��chainIDRchainId
nonce (RnonceG
	gas_price (	B*��&github.com/cosmos/cosmos-sdk/types.IntRgasPrice
gas (B��GasLimitRgas
to (	RtoJ
value (	B4��&github.com/cosmos/cosmos-sdk/types.Int��AmountRvalue
data (Rdata[
accesses (2.ethermint.evm.v1.AccessTupleB �� ��
accessList��
AccessListRaccesses
v	 (Rv
r
 (Rr
s (Rs:�� ʴ-TxData"�
DynamicFeeTx[
chain_id (	B@��&github.com/cosmos/cosmos-sdk/types.Int��ChainID��chainIDRchainId
nonce (RnonceJ
gas_tip_cap (	B*��&github.com/cosmos/cosmos-sdk/types.IntR	gasTipCapJ
gas_fee_cap (	B*��&github.com/cosmos/cosmos-sdk/types.IntR	gasFeeCap
gas (B��GasLimitRgas
to (	RtoJ
value (	B4��&github.com/cosmos/cosmos-sdk/types.Int��AmountRvalue
data (Rdata[
accesses	 (2.ethermint.evm.v1.AccessTupleB �� ��
accessList��
AccessListRaccesses
v
 (Rv
r (Rr
s (Rs:�� ʴ-TxData""
ExtensionOptionsEthereumTx:�� "�
MsgEthereumTxResponse
hash (	Rhash)
logs (2.ethermint.evm.v1.LogRlogs
ret (Rret
vm_error (	RvmError
gas_used (RgasUsed:�� 2�
Msg}

EthereumTx.ethermint.evm.v1.MsgEthereumTx\'.ethermint.evm.v1.MsgEthereumTxResponse"%���"/ethermint/evm/v1/ethereum_txB(Z&github.com/evmos/ethermint/x/evm/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

