<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: installment/messages/create.proto

namespace GPBMetadata\Installment\Messages;

class Create
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
!installment/messages/create.protobarsam.installment.messages"{
CreateRequest
user_id (
loan_id (
number (
amount (	
penalty_amount (	
due_date (	"
CreateResponse

id (bproto3'
        , true);

        static::$is_initialized = true;
    }
}

