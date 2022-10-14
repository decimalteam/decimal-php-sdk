<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/genesis.proto

namespace Decimal\Validator\V1\GPBMetadata;

class Genesis
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Gogoproto\GPBMetadata\Gogo::initOnce();
        \CosmosProto\GPBMetadata\Cosmos::initOnce();
        \Decimal\Validator\V1\GPBMetadata\Validator::initOnce();
        \Decimal\Validator\V1\GPBMetadata\Params::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"decimal/validator/v1/genesis.protodecimal.validator.v1cosmos_proto/cosmos.proto$decimal/validator/v1/validator.proto!decimal/validator/v1/params.proto"�
GenesisStateE

validators (2.decimal.validator.v1.ValidatorB�� R
validatorsH
delegations (2 .decimal.validator.v1.DelegationB�� RdelegationsN
undelegations (2".decimal.validator.v1.UndelegationB�� RundelegationsN
redelegations (2".decimal.validator.v1.RedelegationB�� Rredelegationsb
last_validator_powers (2(.decimal.validator.v1.LastValidatorPowerB�� RlastValidatorPowers(
last_total_power (RlastTotalPower:
params (2.decimal.validator.v1.ParamsB�� Rparams
exported (Rexported"h
LastValidatorPower2
address (	BҴ-cosmos.AddressStringRaddress
power (Rpower:�� � B�
com.decimal.validator.v1BGenesisProtoPZ9bitbucket.org/decimalteam/go-smart-node/x/validator/types�DVX�Decimal.Validator.V1�Decimal\\Validator\\V1� Decimal\\Validator\\V1\\GPBMetadata�Decimal::Validator::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

