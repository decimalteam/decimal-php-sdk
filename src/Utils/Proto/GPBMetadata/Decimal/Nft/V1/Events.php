<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/nft/v1/events.proto

namespace GPBMetadata\Decimal\Nft\V1;

class Events
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\CosmosProto\Cosmos::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
decimal/nft/v1/events.protodecimal.nft.v1cosmos_proto/cosmos.proto"y
EventCreateCollection2
creator (	BҴ-cosmos.AddressStringRcreator
denom (	Rdenom
supply (Rsupply"y
EventUpdateCollection2
creator (	BҴ-cosmos.AddressStringRcreator
denom (	Rdenom
supply (Rsupply"�
EventCreateToken2
creator (	BҴ-cosmos.AddressStringRcreator
denom (	Rdenom
id (	B��IDRid
uri (	B��URIRuri

allow_mint (R	allowMint
reserve (	Rreserve
	recipient (	R	recipient3
sub_token_ids (B��SubTokenIDsRsubTokenIds"�
EventMintToken2
creator (	BҴ-cosmos.AddressStringRcreator
denom (	Rdenom
id (	B��IDRid
reserve (	Rreserve
	recipient (	R	recipient3
sub_token_ids (B��SubTokenIDsRsubTokenIds"w
EventUpdateToken0
sender (	BҴ-cosmos.AddressStringRsender
id (	B��IDRid
uri (	B��URIRuri"�
EventUpdateReserve0
sender (	BҴ-cosmos.AddressStringRsender
id (	B��IDRid
reserve (	Rreserve
refill (	Rrefill3
sub_token_ids (B��SubTokenIDsRsubTokenIds"�
EventSendToken0
sender (	BҴ-cosmos.AddressStringRsender
id (	B��IDRid6
	recipient (	BҴ-cosmos.AddressStringR	recipient3
sub_token_ids (B��SubTokenIDsRsubTokenIds"�
EventBurnToken0
sender (	BҴ-cosmos.AddressStringRsender
id (	B��IDRid
return (	Rreturn3
sub_token_ids (B��SubTokenIDsRsubTokenIdsB5Z3bitbucket.org/decimalteam/go-smart-node/x/nft/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

