<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cpg/messages/get.proto

namespace GPBMetadata\Cpg\Messages;

class Get
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cpg\Models\CpgRequest::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cpg/messages/get.protobarsam.cpg.messages"8

GetRequest

id (
page (
per_page ("\\
GetResponse$
cpgs (2.barsam.cpg.models.CPG
total_records (
max_page (bproto3'
        , true);

        static::$is_initialized = true;
    }
}

