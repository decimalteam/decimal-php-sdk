<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/authz/v1beta1/tx.proto

namespace Cosmos\Authz\V1beta1\GPBMetadata;

class Tx
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \CosmosProto\GPBMetadata\Cosmos::initOnce();
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \Cosmos\Authz\V1beta1\GPBMetadata\Authz::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cosmos/authz/v1beta1/tx.protocosmos.authz.v1beta1gogoproto/gogo.protogoogle/protobuf/any.proto cosmos/authz/v1beta1/authz.proto"w
MsgGrant
granter (	Rgranter
grantee (	Rgrantee7
grant (2.cosmos.authz.v1beta1.GrantB�� Rgrant"+
MsgExecResponse
results (Rresults"o
MsgExec
grantee (	RgranteeJ
msgs (2.google.protobuf.AnyB ʴ-sdk.Msg, authz.AuthorizationRmsgs"
MsgGrantResponse"a
	MsgRevoke
granter (	Rgranter
grantee (	Rgrantee 
msg_type_url (	R
msgTypeUrl"
MsgRevokeResponse2�
MsgO
Grant.cosmos.authz.v1beta1.MsgGrant&.cosmos.authz.v1beta1.MsgGrantResponseL
Exec.cosmos.authz.v1beta1.MsgExec%.cosmos.authz.v1beta1.MsgExecResponseR
Revoke.cosmos.authz.v1beta1.MsgRevoke\'.cosmos.authz.v1beta1.MsgRevokeResponseB�
com.cosmos.authz.v1beta1BTxProtoPZ$github.com/cosmos/cosmos-sdk/x/authz�CAX�Cosmos.Authz.V1beta1�Cosmos\\Authz\\V1beta1� Cosmos\\Authz\\V1beta1\\GPBMetadata�Cosmos::Authz::V1beta1�� bproto3'
        , true);

        static::$is_initialized = true;
    }
}

