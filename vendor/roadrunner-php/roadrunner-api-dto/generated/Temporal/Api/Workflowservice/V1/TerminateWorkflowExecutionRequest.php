<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.TerminateWorkflowExecutionRequest</code>
 */
class TerminateWorkflowExecutionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     */
    protected $workflow_execution = null;
    /**
     * Generated from protobuf field <code>string reason = 3;</code>
     */
    protected $reason = '';
    /**
     * Serialized additional information to attach to the termination event
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 4;</code>
     */
    protected $details = null;
    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 5;</code>
     */
    protected $identity = '';
    /**
     * If set, this call will error if the most recent (if no run id is set on
     * `workflow_execution`), or specified (if it is) workflow execution is not part of the same
     * execution chain as this id.
     *
     * Generated from protobuf field <code>string first_execution_run_id = 6;</code>
     */
    protected $first_execution_run_id = '';
    /**
     * Links to be associated with the WorkflowExecutionTerminated event.
     *
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.Link links = 7;</code>
     */
    private $links;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $workflow_execution
     *     @type string $reason
     *     @type \Temporal\Api\Common\V1\Payloads $details
     *           Serialized additional information to attach to the termination event
     *     @type string $identity
     *           The identity of the worker/client
     *     @type string $first_execution_run_id
     *           If set, this call will error if the most recent (if no run id is set on
     *           `workflow_execution`), or specified (if it is) workflow execution is not part of the same
     *           execution chain as this id.
     *     @type array<\Temporal\Api\Common\V1\Link>|\Google\Protobuf\Internal\RepeatedField $links
     *           Links to be associated with the WorkflowExecutionTerminated event.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
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
     * Generated from protobuf field <code>string reason = 3;</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Generated from protobuf field <code>string reason = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

    /**
     * Serialized additional information to attach to the termination event
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 4;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Serialized additional information to attach to the termination event
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 4;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->details = $var;

        return $this;
    }

    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 5;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * If set, this call will error if the most recent (if no run id is set on
     * `workflow_execution`), or specified (if it is) workflow execution is not part of the same
     * execution chain as this id.
     *
     * Generated from protobuf field <code>string first_execution_run_id = 6;</code>
     * @return string
     */
    public function getFirstExecutionRunId()
    {
        return $this->first_execution_run_id;
    }

    /**
     * If set, this call will error if the most recent (if no run id is set on
     * `workflow_execution`), or specified (if it is) workflow execution is not part of the same
     * execution chain as this id.
     *
     * Generated from protobuf field <code>string first_execution_run_id = 6;</code>
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
     * Links to be associated with the WorkflowExecutionTerminated event.
     *
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.Link links = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Links to be associated with the WorkflowExecutionTerminated event.
     *
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.Link links = 7;</code>
     * @param array<\Temporal\Api\Common\V1\Link>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Common\V1\Link::class);
        $this->links = $arr;

        return $this;
    }

}

