<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/messages/register.proto

namespace GPBMetadata\User\Messages;

class Register
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
user/messages/register.protobarsam.user.messages"�
RegisterRequest
login_id (	
password_raw (	J
meta_fields (25.barsam.user.messages.RegisterRequest.MetaFieldsEntry1
MetaFieldsEntry
key (
value (	:8"#
RegisterResponse
user_id (bproto3'
        , true);

        static::$is_initialized = true;
    }
}

