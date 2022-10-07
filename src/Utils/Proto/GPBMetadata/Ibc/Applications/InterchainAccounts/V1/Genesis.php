<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/interchain_accounts/v1/genesis.proto

namespace GPBMetadata\Ibc\Applications\InterchainAccounts\V1;

class Genesis
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Ibc\Applications\InterchainAccounts\Controller\V1\Controller::initOnce();
        \GPBMetadata\Ibc\Applications\InterchainAccounts\Host\V1\Host::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5ibc/applications/interchain_accounts/v1/genesis.proto\'ibc.applications.interchain_accounts.v1Cibc/applications/interchain_accounts/controller/v1/controller.proto7ibc/applications/interchain_accounts/host/v1/host.proto"�
GenesisState�
controller_genesis_state (2?.ibc.applications.interchain_accounts.v1.ControllerGenesisStateB\'�� ��yaml:"controller_genesis_state"RcontrollerGenesisState�
host_genesis_state (29.ibc.applications.interchain_accounts.v1.HostGenesisStateB!�� ��yaml:"host_genesis_state"RhostGenesisState"�
ControllerGenesisState
active_channels (26.ibc.applications.interchain_accounts.v1.ActiveChannelB�� ��yaml:"active_channels"RactiveChannels�
interchain_accounts (2D.ibc.applications.interchain_accounts.v1.RegisteredInterchainAccountB"�� ��yaml:"interchain_accounts"RinterchainAccounts
ports (	RportsX
params (2:.ibc.applications.interchain_accounts.controller.v1.ParamsB�� Rparams"�
HostGenesisState
active_channels (26.ibc.applications.interchain_accounts.v1.ActiveChannelB�� ��yaml:"active_channels"RactiveChannels�
interchain_accounts (2D.ibc.applications.interchain_accounts.v1.RegisteredInterchainAccountB"�� ��yaml:"interchain_accounts"RinterchainAccounts
port (	RportR
params (24.ibc.applications.interchain_accounts.host.v1.ParamsB�� Rparams"�
ActiveChannel=
connection_id (	B��yaml:"connection_id"RconnectionId+
port_id (	B��yaml:"port_id"RportId4

channel_id (	B��yaml:"channel_id"R	channelId"�
RegisteredInterchainAccount=
connection_id (	B��yaml:"connection_id"RconnectionId+
port_id (	B��yaml:"port_id"RportIdC
account_address (	B��yaml:"account_address"RaccountAddressBGZEgithub.com/cosmos/ibc-go/v5/modules/apps/27-interchain-accounts/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

