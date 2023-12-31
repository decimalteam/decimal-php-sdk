<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/fee/v1/query.proto

namespace Decimal\Fee\V1\GPBMetadata;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \Google\Api\GPBMetadata\Annotations::initOnce();
        \Decimal\Fee\V1\GPBMetadata\Fee::initOnce();
        \Decimal\Fee\V1\GPBMetadata\Params::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
decimal/fee/v1/query.protodecimal.fee.v1google/api/annotations.protodecimal/fee/v1/fee.protodecimal/fee/v1/params.proto"
QueryCoinPricesRequest"R
QueryCoinPricesResponse7
prices (2.decimal.fee.v1.CoinPriceB�� Rprices"C
QueryCoinPriceRequest
denom (	Rdenom
quote (	Rquote"I
QueryCoinPriceResponse/
price (2.decimal.fee.v1.CoinPriceRprice"
QueryModuleParamsRequest"Q
QueryModuleParamsResponse4
params (2.decimal.fee.v1.ParamsB�� Rparams2�
Query}

CoinPrices&.decimal.fee.v1.QueryCoinPricesRequest\'.decimal.fee.v1.QueryCoinPricesResponse"���/decimal/fee/v1/prices�
	CoinPrice%.decimal.fee.v1.QueryCoinPriceRequest&.decimal.fee.v1.QueryCoinPriceResponse"-���\'%/decimal/fee/v1/price/{denom}/{quote}�
ModuleParams(.decimal.fee.v1.QueryModuleParamsRequest).decimal.fee.v1.QueryModuleParamsResponse"���/decimal/fee/v1/paramsB�
com.decimal.fee.v1B
QueryProtoPZ3bitbucket.org/decimalteam/go-smart-node/x/fee/types�DFX�Decimal.Fee.V1�Decimal\\Fee\\V1�Decimal\\Fee\\V1\\GPBMetadata�Decimal::Fee::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

