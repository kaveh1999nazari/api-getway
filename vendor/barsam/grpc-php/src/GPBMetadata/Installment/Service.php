<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: installment/service.proto

namespace GPBMetadata\Installment;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Installment\Messages\Create::initOnce();
        \GPBMetadata\Installment\Messages\Delete::initOnce();
        \GPBMetadata\Installment\Messages\Update::initOnce();
        \GPBMetadata\Installment\Messages\GetAll::initOnce();
        \GPBMetadata\Installment\Messages\Generate::initOnce();
        \GPBMetadata\Installment\Messages\Get::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
installment/service.protobarsam.installment!installment/messages/delete.proto!installment/messages/update.proto"installment/messages/get_all.proto#installment/messages/generate.protoinstallment/messages/get.proto2�
InstallmentServicea
Create*.barsam.installment.messages.CreateRequest+.barsam.installment.messages.CreateResponseg
Generate,.barsam.installment.messages.GenerateRequest-.barsam.installment.messages.GenerateResponsea
Update*.barsam.installment.messages.UpdateRequest+.barsam.installment.messages.UpdateResponsea
Delete*.barsam.installment.messages.DeleteRequest+.barsam.installment.messages.DeleteResponsea
GetAll*.barsam.installment.messages.GetAllRequest+.barsam.installment.messages.GetAllResponseX
Get\'.barsam.installment.messages.GetRequest(.barsam.installment.messages.GetResponsebproto3'
        , true);

        static::$is_initialized = true;
    }
}

