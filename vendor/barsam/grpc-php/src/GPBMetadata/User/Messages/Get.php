<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/messages/get.proto

namespace GPBMetadata\User\Messages;

class Get
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\User\Models\User::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
user/messages/get.protobarsam.user.messages"J

GetRequest

id (
login_id (	
page (
per_page ("_
GetResponse\'
users (2.barsam.user.models.User
total_records (
max_page (bproto3'
        , true);

        static::$is_initialized = true;
    }
}

