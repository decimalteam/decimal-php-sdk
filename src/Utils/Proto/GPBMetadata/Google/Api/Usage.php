<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/usage.proto

namespace GPBMetadata\Google\Api;

class Usage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/api/usage.proto
google.api"j
Usage
requirements (	$
rules (2.google.api.UsageRule%
producer_notification_channel (	"]
	UsageRule
selector (	 
allow_unregistered_calls (
skip_service_control (Bl
com.google.apiB
UsageProtoPZEgoogle.golang.org/genproto/googleapis/api/serviceconfig;serviceconfig�GAPIbproto3'
        , true);

        static::$is_initialized = true;
    }
}

