<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/coin/v1/query.proto

namespace GPBMetadata\Decimal\Coin\V1;

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
        \GPBMetadata\Cosmos\Base\Query\V1Beta1\Pagination::initOnce();
        \GPBMetadata\Decimal\Coin\V1\Coin::initOnce();
        \GPBMetadata\Decimal\Coin\V1\Params::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
decimal/coin/v1/query.protodecimal.coin.v1google/api/annotations.proto*cosmos/base/query/v1beta1/pagination.protodecimal/coin/v1/coin.protodecimal/coin/v1/params.proto"[
QueryCoinsRequestF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryCoinsResponse1
coins (2.decimal.coin.v1.CoinB�� RcoinsG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"(
QueryCoinRequest
denom (	Rdenom"D
QueryCoinResponse/
coin (2.decimal.coin.v1.CoinB�� Rcoin"\\
QueryChecksRequestF

pagination (2&.cosmos.base.query.v1beta1.PageRequestR
pagination"�
QueryChecksResponse4
checks (2.decimal.coin.v1.CheckB�� RchecksG

pagination (2\'.cosmos.base.query.v1beta1.PageResponseR
pagination"\'
QueryCheckRequest
hash (Rhash"H
QueryCheckResponse2
check (2.decimal.coin.v1.CheckB�� Rcheck"
QueryParamsRequest"L
QueryParamsResponse5
params (2.decimal.coin.v1.ParamsB�� Rparams2�
Queryp
Coins".decimal.coin.v1.QueryCoinsRequest#.decimal.coin.v1.QueryCoinsResponse"���/decimal/coin/v1/coinst
Coin!.decimal.coin.v1.QueryCoinRequest".decimal.coin.v1.QueryCoinResponse"%���/decimal/coin/v1/coin/{denom}t
Checks#.decimal.coin.v1.QueryChecksRequest$.decimal.coin.v1.QueryChecksResponse"���/decimal/coin/v1/checksw
Check".decimal.coin.v1.QueryCheckRequest#.decimal.coin.v1.QueryCheckResponse"%���/decimal/coin/v1/check/{hash}t
Params#.decimal.coin.v1.QueryParamsRequest$.decimal.coin.v1.QueryParamsResponse"���/decimal/coin/v1/paramsB6Z4bitbucket.org/decimalteam/go-smart-node/x/coin/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

