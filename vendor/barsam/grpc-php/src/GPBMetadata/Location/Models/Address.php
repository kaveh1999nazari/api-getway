<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: location/models/address.proto

namespace GPBMetadata\Location\Models;

class Address
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Location\Models\City::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
location/models/address.protobarsam.location.models"�
Address

id (
city_id (
address (	
postal_code (	
phone_number (	*
city (2.barsam.location.models.Citybproto3'
        , true);

        static::$is_initialized = true;
    }
}

