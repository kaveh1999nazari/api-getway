<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: shop/messages/get.proto

namespace GPBMetadata\Shop\Messages;

class Get
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Shop\Models\Shop::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
shop/messages/get.protobarsam.shop.messages"\\

GetRequest

id (
user_id (
	parent_id (
page (
per_page ("_
GetResponse\'
shops (2.barsam.shop.models.Shop
total_records (
max_page (bproto3'
        , true);

        static::$is_initialized = true;
    }
}

