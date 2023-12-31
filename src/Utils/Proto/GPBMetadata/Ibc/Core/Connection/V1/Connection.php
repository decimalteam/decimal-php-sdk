<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/connection/v1/connection.proto

namespace GPBMetadata\Ibc\Core\Connection\V1;

class Connection
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Ibc\Core\Commitment\V1\Commitment::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
\'ibc/core/connection/v1/connection.protoibc.core.connection.v1\'ibc/core/commitment/v1/commitment.proto"�
ConnectionEnd1
	client_id (	B��yaml:"client_id"RclientId;
versions (2.ibc.core.connection.v1.VersionRversions3
state (2.ibc.core.connection.v1.StateRstateN
counterparty (2$.ibc.core.connection.v1.CounterpartyB�� Rcounterparty:
delay_period (B��yaml:"delay_period"RdelayPeriod:�� "�
IdentifiedConnection
id (	B��	yaml:"id"Rid1
	client_id (	B��yaml:"client_id"RclientId;
versions (2.ibc.core.connection.v1.VersionRversions3
state (2.ibc.core.connection.v1.StateRstateN
counterparty (2$.ibc.core.connection.v1.CounterpartyB�� Rcounterparty:
delay_period (B��yaml:"delay_period"RdelayPeriod:�� "�
Counterparty1
	client_id (	B��yaml:"client_id"RclientId=
connection_id (	B��yaml:"connection_id"RconnectionIdB
prefix (2$.ibc.core.commitment.v1.MerklePrefixB�� Rprefix:�� "#
ClientPaths
paths (	Rpaths"Z
ConnectionPaths1
	client_id (	B��yaml:"client_id"RclientId
paths (	Rpaths"K
Version

identifier (	R
identifier
features (	Rfeatures:�� "n
Paramsd
max_expected_time_per_block (B&��"yaml:"max_expected_time_per_block"RmaxExpectedTimePerBlock*�
State6
STATE_UNINITIALIZED_UNSPECIFIED �� UNINITIALIZED

STATE_INIT�� INIT
STATE_TRYOPEN�� TRYOPEN

STATE_OPEN�� OPEN�� B>Z<github.com/cosmos/ibc-go/v5/modules/core/03-connection/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

