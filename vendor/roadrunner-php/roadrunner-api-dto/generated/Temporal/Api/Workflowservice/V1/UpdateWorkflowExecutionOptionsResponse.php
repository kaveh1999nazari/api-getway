<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.UpdateWorkflowExecutionOptionsResponse</code>
 */
class UpdateWorkflowExecutionOptionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Workflow Execution options after update.
     *
     * Generated from protobuf field <code>.temporal.api.workflow.v1.WorkflowExecutionOptions workflow_execution_options = 1;</code>
     */
    protected $workflow_execution_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Workflow\V1\WorkflowExecutionOptions $workflow_execution_options
     *           Workflow Execution options after update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Workflow Execution options after update.
     *
     * Generated from protobuf field <code>.temporal.api.workflow.v1.WorkflowExecutionOptions workflow_execution_options = 1;</code>
     * @return \Temporal\Api\Workflow\V1\WorkflowExecutionOptions|null
     */
    public function getWorkflowExecutionOptions()
    {
        return $this->workflow_execution_options;
    }

    public function hasWorkflowExecutionOptions()
    {
        return isset($this->workflow_execution_options);
    }

    public function clearWorkflowExecutionOptions()
    {
        unset($this->workflow_execution_options);
    }

    /**
     * Workflow Execution options after update.
     *
     * Generated from protobuf field <code>.temporal.api.workflow.v1.WorkflowExecutionOptions workflow_execution_options = 1;</code>
     * @param \Temporal\Api\Workflow\V1\WorkflowExecutionOptions $var
     * @return $this
     */
    public function setWorkflowExecutionOptions($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflow\V1\WorkflowExecutionOptions::class);
        $this->workflow_execution_options = $var;

        return $this;
    }

}

