<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/messages/field_get.proto

namespace GPBMetadata\User\Messages;

class FieldGet
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\User\Models\Field::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
user/messages/field_get.protobarsam.user.messages"=
FieldGetRequest

id (
page (
per_page ("f
FieldGetResponse)
fields (2.barsam.user.models.Field
total_records (
max_page (bproto3'
        , true);

        static::$is_initialized = true;
    }
}

