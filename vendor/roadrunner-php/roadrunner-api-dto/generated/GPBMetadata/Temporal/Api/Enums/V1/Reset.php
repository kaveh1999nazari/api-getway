<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/enums/v1/reset.proto

namespace GPBMetadata\Temporal\Api\Enums\V1;

class Reset
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xC0\x05\x0A!temporal/api/enums/v1/reset.proto\x12\x15temporal.api.enums.v1*\xEC\x01\x0A\x17ResetReapplyExcludeType\x12*\x0A&RESET_REAPPLY_EXCLUDE_TYPE_UNSPECIFIED\x10\x00\x12%\x0A!RESET_REAPPLY_EXCLUDE_TYPE_SIGNAL\x10\x01\x12%\x0A!RESET_REAPPLY_EXCLUDE_TYPE_UPDATE\x10\x02\x12\$\x0A RESET_REAPPLY_EXCLUDE_TYPE_NEXUS\x10\x03\x121\x0A)RESET_REAPPLY_EXCLUDE_TYPE_CANCEL_REQUEST\x10\x04\x1A\x02\x08\x01*\x97\x01\x0A\x10ResetReapplyType\x12\"\x0A\x1ERESET_REAPPLY_TYPE_UNSPECIFIED\x10\x00\x12\x1D\x0A\x19RESET_REAPPLY_TYPE_SIGNAL\x10\x01\x12\x1B\x0A\x17RESET_REAPPLY_TYPE_NONE\x10\x02\x12#\x0A\x1FRESET_REAPPLY_TYPE_ALL_ELIGIBLE\x10\x03*n\x0A\x09ResetType\x12\x1A\x0A\x16RESET_TYPE_UNSPECIFIED\x10\x00\x12\"\x0A\x1ERESET_TYPE_FIRST_WORKFLOW_TASK\x10\x01\x12!\x0A\x1DRESET_TYPE_LAST_WORKFLOW_TASK\x10\x02B\x82\x01\x0A\x18io.temporal.api.enums.v1B\x0AResetProtoP\x01Z!go.temporal.io/api/enums/v1;enums\xAA\x02\x17Temporalio.Api.Enums.V1\xEA\x02\x1ATemporalio::Api::Enums::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

