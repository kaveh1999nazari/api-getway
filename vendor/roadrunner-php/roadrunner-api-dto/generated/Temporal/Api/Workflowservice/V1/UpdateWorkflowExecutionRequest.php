<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * (-- api-linter: core::0134=disabled
 *     aip.dev/not-precedent: Update RPCs don't follow Google API format. --)
 *
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.UpdateWorkflowExecutionRequest</code>
 */
class UpdateWorkflowExecutionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The namespace name of the target Workflow.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * The target Workflow Id and (optionally) a specific Run Id thereof.
     * (-- api-linter: core::0203::optional=disabled
     *     aip.dev/not-precedent: false positive triggered by the word "optional" --)
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     */
    protected $workflow_execution = null;
    /**
     * If set, this call will error if the most recent (if no Run Id is set on
     * `workflow_execution`), or specified (if it is) Workflow Execution is not
     * part of the same execution chain as this Id.
     *
     * Generated from protobuf field <code>string first_execution_run_id = 3;</code>
     */
    protected $first_execution_run_id = '';
    /**
     * Specifies client's intent to wait for Update results.
     * NOTE: This field works together with API call timeout which is limited by
     * server timeout (maximum wait time). If server timeout is expired before
     * user specified timeout, API call returns even if specified stage is not reached.
     * Actual reached stage will be included in the response.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.WaitPolicy wait_policy = 4;</code>
     */
    protected $wait_policy = null;
    /**
     * The request information that will be delivered all the way down to the
     * Workflow Execution.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.Request request = 5;</code>
     */
    protected $request = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           The namespace name of the target Workflow.
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $workflow_execution
     *           The target Workflow Id and (optionally) a specific Run Id thereof.
     *           (-- api-linter: core::0203::optional=disabled
     *               aip.dev/not-precedent: false positive triggered by the word "optional" --)
     *     @type string $first_execution_run_id
     *           If set, this call will error if the most recent (if no Run Id is set on
     *           `workflow_execution`), or specified (if it is) Workflow Execution is not
     *           part of the same execution chain as this Id.
     *     @type \Temporal\Api\Update\V1\WaitPolicy $wait_policy
     *           Specifies client's intent to wait for Update results.
     *           NOTE: This field works together with API call timeout which is limited by
     *           server timeout (maximum wait time). If server timeout is expired before
     *           user specified timeout, API call returns even if specified stage is not reached.
     *           Actual reached stage will be included in the response.
     *     @type \Temporal\Api\Update\V1\Request $request
     *           The request information that will be delivered all the way down to the
     *           Workflow Execution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * The namespace name of the target Workflow.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * The namespace name of the target Workflow.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
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
     * The target Workflow Id and (optionally) a specific Run Id thereof.
     * (-- api-linter: core::0203::optional=disabled
     *     aip.dev/not-precedent: false positive triggered by the word "optional" --)
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution|null
     */
    public function getWorkflowExecution()
    {
        return $this->workflow_execution;
    }

    public function hasWorkflowExecution()
    {
        return isset($this->workflow_execution);
    }

    public function clearWorkflowExecution()
    {
        unset($this->workflow_execution);
    }

    /**
     * The target Workflow Id and (optionally) a specific Run Id thereof.
     * (-- api-linter: core::0203::optional=disabled
     *     aip.dev/not-precedent: false positive triggered by the word "optional" --)
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     * @param \Temporal\Api\Common\V1\WorkflowExecution $var
     * @return $this
     */
    public function setWorkflowExecution($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->workflow_execution = $var;

        return $this;
    }

    /**
     * If set, this call will error if the most recent (if no Run Id is set on
     * `workflow_execution`), or specified (if it is) Workflow Execution is not
     * part of the same execution chain as this Id.
     *
     * Generated from protobuf field <code>string first_execution_run_id = 3;</code>
     * @return string
     */
    public function getFirstExecutionRunId()
    {
        return $this->first_execution_run_id;
    }

    /**
     * If set, this call will error if the most recent (if no Run Id is set on
     * `workflow_execution`), or specified (if it is) Workflow Execution is not
     * part of the same execution chain as this Id.
     *
     * Generated from protobuf field <code>string first_execution_run_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstExecutionRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_execution_run_id = $var;

        return $this;
    }

    /**
     * Specifies client's intent to wait for Update results.
     * NOTE: This field works together with API call timeout which is limited by
     * server timeout (maximum wait time). If server timeout is expired before
     * user specified timeout, API call returns even if specified stage is not reached.
     * Actual reached stage will be included in the response.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.WaitPolicy wait_policy = 4;</code>
     * @return \Temporal\Api\Update\V1\WaitPolicy|null
     */
    public function getWaitPolicy()
    {
        return $this->wait_policy;
    }

    public function hasWaitPolicy()
    {
        return isset($this->wait_policy);
    }

    public function clearWaitPolicy()
    {
        unset($this->wait_policy);
    }

    /**
     * Specifies client's intent to wait for Update results.
     * NOTE: This field works together with API call timeout which is limited by
     * server timeout (maximum wait time). If server timeout is expired before
     * user specified timeout, API call returns even if specified stage is not reached.
     * Actual reached stage will be included in the response.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.WaitPolicy wait_policy = 4;</code>
     * @param \Temporal\Api\Update\V1\WaitPolicy $var
     * @return $this
     */
    public function setWaitPolicy($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Update\V1\WaitPolicy::class);
        $this->wait_policy = $var;

        return $this;
    }

    /**
     * The request information that will be delivered all the way down to the
     * Workflow Execution.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.Request request = 5;</code>
     * @return \Temporal\Api\Update\V1\Request|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    public function hasRequest()
    {
        return isset($this->request);
    }

    public function clearRequest()
    {
        unset($this->request);
    }

    /**
     * The request information that will be delivered all the way down to the
     * Workflow Execution.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.Request request = 5;</code>
     * @param \Temporal\Api\Update\V1\Request $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Update\V1\Request::class);
        $this->request = $var;

        return $this;
    }

}

