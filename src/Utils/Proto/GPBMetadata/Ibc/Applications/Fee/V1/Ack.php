<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/fee/v1/ack.proto

namespace GPBMetadata\Ibc\Applications\Fee\V1;

class Ack
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gogoproto\Gogo::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
!ibc/applications/fee/v1/ack.protoibc.applications.fee.v1"�
IncentivizedAcknowledgementO
app_acknowledgement (B��yaml:"app_acknowledgement"RappAcknowledgementZ
forward_relayer_address (	B"��yaml:"forward_relayer_address"RforwardRelayerAddressX
underlying_app_success (B"��yaml:"underlying_app_successl"RunderlyingAppSuccessB7Z5github.com/cosmos/ibc-go/v5/modules/apps/29-fee/typesbproto3'
        , true);

        static::$is_initialized = true;
    }
}
