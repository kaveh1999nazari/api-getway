<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wallet/messages/get.proto

namespace GPBMetadata\Wallet\Messages;

class Get
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Wallet\Models\Wallet::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
wallet/messages/get.protobarsam.wallet.messages")

GetRequest

id (
address (	";
GetResponse,
wallet (2.barsam.wallet.models.Walletbproto3'
        , true);

        static::$is_initialized = true;
    }
}

