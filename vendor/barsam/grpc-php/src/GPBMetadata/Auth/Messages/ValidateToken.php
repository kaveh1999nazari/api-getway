<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth/messages/validate_token.proto

namespace GPBMetadata\Auth\Messages;

class ValidateToken
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Auth\Enums\LoginType::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"auth/messages/validate_token.protobarsam.auth.messages",
ValidateTokenRequest
access_token (	"�
ValidateTokenResponse+
valid (2.barsam.auth.enums.LoginTypeG
claims (27.barsam.auth.messages.ValidateTokenResponse.ClaimsEntry-
ClaimsEntry
key (	
value (	:8bproto3'
        , true);

        static::$is_initialized = true;
    }
}

