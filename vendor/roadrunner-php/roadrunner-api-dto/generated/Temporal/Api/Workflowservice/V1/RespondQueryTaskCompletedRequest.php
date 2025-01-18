<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.RespondQueryTaskCompletedRequest</code>
 */
class RespondQueryTaskCompletedRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     */
    protected $task_token = '';
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.QueryResultType completed_type = 2;</code>
     */
    protected $completed_type = 0;
    /**
     * The result of the query.
     * Mutually exclusive with `error_message` and `failure`. Set when the query succeeds.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads query_result = 3;</code>
     */
    protected $query_result = null;
    /**
     * A plain error message that must be set if completed_type is QUERY_RESULT_TYPE_FAILED.
     * SDKs should also fill in the more complete `failure` field to provide the full context and
     * support encryption of failure information.
     * `error_message` will be duplicated if the `failure` field is present to support callers
     * that pre-date the addition of that field, regardless of whether or not a custom failure
     * converter is used.
     * Mutually exclusive with `query_result`. Set when the query fails.
     *
     * Generated from protobuf field <code>string error_message = 4;</code>
     */
    protected $error_message = '';
    /**
     * Generated from protobuf field <code>string namespace = 6;</code>
     */
    protected $namespace = '';
    /**
     * The full reason for this query failure. This field is newer than `error_message` and can be
     * encoded by the SDK's failure converter to support E2E encryption of messages and stack
     * traces.
     * Mutually exclusive with `query_result`. Set when the query fails.
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 7;</code>
     */
    protected $failure = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $task_token
     *     @type int $completed_type
     *     @type \Temporal\Api\Common\V1\Payloads $query_result
     *           The result of the query.
     *           Mutually exclusive with `error_message` and `failure`. Set when the query succeeds.
     *     @type string $error_message
     *           A plain error message that must be set if completed_type is QUERY_RESULT_TYPE_FAILED.
     *           SDKs should also fill in the more complete `failure` field to provide the full context and
     *           support encryption of failure information.
     *           `error_message` will be duplicated if the `failure` field is present to support callers
     *           that pre-date the addition of that field, regardless of whether or not a custom failure
     *           converter is used.
     *           Mutually exclusive with `query_result`. Set when the query fails.
     *     @type string $namespace
     *     @type \Temporal\Api\Failure\V1\Failure $failure
     *           The full reason for this query failure. This field is newer than `error_message` and can be
     *           encoded by the SDK's failure converter to support E2E encryption of messages and stack
     *           traces.
     *           Mutually exclusive with `query_result`. Set when the query fails.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @return string
     */
    public function getTaskToken()
    {
        return $this->task_token;
    }

    /**
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->task_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.QueryResultType completed_type = 2;</code>
     * @return int
     */
    public function getCompletedType()
    {
        return $this->completed_type;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.QueryResultType completed_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCompletedType($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\QueryResultType::class);
        $this->completed_type = $var;

        return $this;
    }

    /**
     * The result of the query.
     * Mutually exclusive with `error_message` and `failure`. Set when the query succeeds.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads query_result = 3;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getQueryResult()
    {
        return $this->query_result;
    }

    public function hasQueryResult()
    {
        return isset($this->query_result);
    }

    public function clearQueryResult()
    {
        unset($this->query_result);
    }

    /**
     * The result of the query.
     * Mutually exclusive with `error_message` and `failure`. Set when the query succeeds.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads query_result = 3;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setQueryResult($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->query_result = $var;

        return $this;
    }

    /**
     * A plain error message that must be set if completed_type is QUERY_RESULT_TYPE_FAILED.
     * SDKs should also fill in the more complete `failure` field to provide the full context and
     * support encryption of failure information.
     * `error_message` will be duplicated if the `failure` field is present to support callers
     * that pre-date the addition of that field, regardless of whether or not a custom failure
     * converter is used.
     * Mutually exclusive with `query_result`. Set when the query fails.
     *
     * Generated from protobuf field <code>string error_message = 4;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * A plain error message that must be set if completed_type is QUERY_RESULT_TYPE_FAILED.
     * SDKs should also fill in the more complete `failure` field to provide the full context and
     * support encryption of failure information.
     * `error_message` will be duplicated if the `failure` field is present to support callers
     * that pre-date the addition of that field, regardless of whether or not a custom failure
     * converter is used.
     * Mutually exclusive with `query_result`. Set when the query fails.
     *
     * Generated from protobuf field <code>string error_message = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string namespace = 6;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * The full reason for this query failure. This field is newer than `error_message` and can be
     * encoded by the SDK's failure converter to support E2E encryption of messages and stack
     * traces.
     * Mutually exclusive with `query_result`. Set when the query fails.
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 7;</code>
     * @return \Temporal\Api\Failure\V1\Failure|null
     */
    public function getFailure()
    {
        return $this->failure;
    }

    public function hasFailure()
    {
        return isset($this->failure);
    }

    public function clearFailure()
    {
        unset($this->failure);
    }

    /**
     * The full reason for this query failure. This field is newer than `error_message` and can be
     * encoded by the SDK's failure converter to support E2E encryption of messages and stack
     * traces.
     * Mutually exclusive with `query_result`. Set when the query fails.
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 7;</code>
     * @param \Temporal\Api\Failure\V1\Failure $var
     * @return $this
     */
    public function setFailure($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Failure\V1\Failure::class);
        $this->failure = $var;

        return $this;
    }

}

