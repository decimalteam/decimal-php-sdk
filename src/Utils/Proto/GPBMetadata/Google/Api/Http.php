<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/http.proto

namespace GPBMetadata\Google\Api;

class Http
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
google/api/http.proto
google.api"+
Http#
rules (2.google.api.HttpRule"�
HttpRule
selector (	
get (	H 
put (	H 
post (	H 
delete (	H 
patch (	H /
custom (2.google.api.CustomHttpPatternH 
body (	1
additional_bindings (2.google.api.HttpRuleB	
pattern"/
CustomHttpPattern
kind (	
path (	Bj
com.google.apiB	HttpProtoPZAgoogle.golang.org/genproto/googleapis/api/annotations;annotations��GAPIbproto3'
        , true);

        static::$is_initialized = true;
    }
}

