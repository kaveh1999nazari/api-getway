<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ticket/messages/get.proto

namespace GPBMetadata\Ticket\Messages;

class Get
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Ticket\Models\Ticket::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
ticket/messages/get.protobarsam.ticket.messages"

GetRequest

id (";
GetResponse,
ticket (2.barsam.ticket.models.Ticketbproto3'
        , true);

        static::$is_initialized = true;
    }
}

