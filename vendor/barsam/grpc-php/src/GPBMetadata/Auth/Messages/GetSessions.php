<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth/messages/get_sessions.proto

namespace GPBMetadata\Auth\Messages;

class GetSessions
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Auth\Models\Session::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 auth/messages/get_sessions.protobarsam.auth.messages"*
GetSessionsRequest
access_token (	"D
GetSessionsResponse-
sessions (2.barsam.auth.models.Sessionbproto3'
        , true);

        static::$is_initialized = true;
    }
}

