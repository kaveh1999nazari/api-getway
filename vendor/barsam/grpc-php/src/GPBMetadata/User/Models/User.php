<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/models/user.proto

namespace GPBMetadata\User\Models;

class User
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
user/models/user.protobarsam.user.models"�
User

id (	
login_id (	
password (	.

created_at (2.google.protobuf.Timestamp.

updated_at (2.google.protobuf.Timestamp.

deleted_at (2.google.protobuf.Timestampbproto3'
        , true);

        static::$is_initialized = true;
    }
}

