<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/export/v1/message.proto

namespace GPBMetadata\Temporal\Api\Export\V1;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xEA\x02\x0A\$temporal/api/export/v1/message.proto\x12\x16temporal.api.export.v1\"F\x0A\x11WorkflowExecution\x121\x0A\x07history\x18\x01 \x01(\x0B2 .temporal.api.history.v1.History\"N\x0A\x12WorkflowExecutions\x128\x0A\x05items\x18\x01 \x03(\x0B2).temporal.api.export.v1.WorkflowExecutionB\x89\x01\x0A\x19io.temporal.api.export.v1B\x0CMessageProtoP\x01Z#go.temporal.io/api/export/v1;export\xAA\x02\x18Temporalio.Api.Export.V1\xEA\x02\x1BTemporalio::Api::Export::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

