<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: otp/messages/generate.proto

namespace GPBMetadata\Otp\Messages;

class Generate
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
otp/messages/generate.protobarsam.otp.messages"e
GenerateRequest

identifier (	
expire_seconds (
expire_latest (
channel (	" 
GenerateResponse
code (	bproto3'
        , true);

        static::$is_initialized = true;
    }
}

