<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: organization/messages/update.proto

namespace GPBMetadata\Organization\Messages;

class Update
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
"organization/messages/update.protobarsam.organization.messages"w
UpdateRequest

id (
name (	
address (	
email (	
phone (	
city (	
website (	"
UpdateResponsebproto3'
        , true);

        static::$is_initialized = true;
    }
}

