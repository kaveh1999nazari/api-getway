<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth/enums/grant_type.proto

namespace GPBMetadata\Auth\Enums;

class GrantType
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
auth/enums/grant_type.protobarsam.auth.enums*U
	GrantType
AUTHORIZATION_CODE 
REFRESH_TOKEN
PASSWORD
DEVICE_CODEbproto3'
        , true);

        static::$is_initialized = true;
    }
}

