<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/models/user_meta.proto

namespace GPBMetadata\User\Models;

class UserMeta
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\User\Models\Field::initOnce();
        \GPBMetadata\User\Models\FieldOption::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
user/models/user_meta.protobarsam.user.modelsuser/models/field_option.proto"z
UserMeta(
field (2.barsam.user.models.Field5
field_option (2.barsam.user.models.FieldOption
value (	bproto3'
        , true);

        static::$is_initialized = true;
    }
}

