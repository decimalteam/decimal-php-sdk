<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/query/v1beta1/pagination.proto

namespace Cosmos\Base\Query\V1beta1\GPBMetadata;

class Pagination
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
*cosmos/base/query/v1beta1/pagination.protocosmos.base.query.v1beta1"�
PageRequest
key (Rkey
offset (Roffset
limit (Rlimit
count_total (R
countTotal
reverse (Rreverse"?
PageResponse
next_key (RnextKey
total (RtotalB�
com.cosmos.base.query.v1beta1BPaginationProtoPZ(github.com/cosmos/cosmos-sdk/types/query�CBQ�Cosmos.Base.Query.V1beta1�Cosmos\\Base\\Query\\V1beta1�%Cosmos\\Base\\Query\\V1beta1\\GPBMetadata�Cosmos::Base::Query::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
