<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: payment/messages/verify.proto

namespace GPBMetadata\Payment\Messages;

class Verify
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
payment/messages/verify.protobarsam.payment.messages"�
VerifyRequest
transaction_id (
reference_id (	S
additional_data (2:.barsam.payment.messages.VerifyRequest.AdditionalDataEntry5
AdditionalDataEntry
key (	
value (	:8">
VerifyResponse
is_verified (
is_double_spent (bproto3'
        , true);

        static::$is_initialized = true;
    }
}

