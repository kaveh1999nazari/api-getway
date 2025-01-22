<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.UpdateWorkflowExecutionOptionsRequest</code>
 */
class UpdateWorkflowExecutionOptionsRequest extends \Google\Protobuf\Internal\Message
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
     * Workflow Execution options. Partial updates are accepted and controlled by update_mask.
     *
     * Generated from protobuf field <code>.temporal.api.workflow.v1.WorkflowExecutionOptions workflow_execution_options = 3;</code>
     */
    protected $workflow_execution_options = null;
    /**
     * Controls which fields from `workflow_execution_options` will be applied.
     * To unset a field, set it to null and use the update mask to indicate that it should be mutated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     */
    protected $update_mask = null;

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
     *     @type \Temporal\Api\Workflow\V1\WorkflowExecutionOptions $workflow_execution_options
     *           Workflow Execution options. Partial updates are accepted and controlled by update_mask.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Controls which fields from `workflow_execution_options` will be applied.
     *           To unset a field, set it to null and use the update mask to indicate that it should be mutated.
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
     * Workflow Execution options. Partial updates are accepted and controlled by update_mask.
     *
     * Generated from protobuf field <code>.temporal.api.workflow.v1.WorkflowExecutionOptions workflow_execution_options = 3;</code>
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
     * Workflow Execution options. Partial updates are accepted and controlled by update_mask.
     *
     * Generated from protobuf field <code>.temporal.api.workflow.v1.WorkflowExecutionOptions workflow_execution_options = 3;</code>
     * @param \Temporal\Api\Workflow\V1\WorkflowExecutionOptions $var
     * @return $this
     */
    public function setWorkflowExecutionOptions($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflow\V1\WorkflowExecutionOptions::class);
        $this->workflow_execution_options = $var;

        return $this;
    }

    /**
     * Controls which fields from `workflow_execution_options` will be applied.
     * To unset a field, set it to null and use the update mask to indicate that it should be mutated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Controls which fields from `workflow_execution_options` will be applied.
     * To unset a field, set it to null and use the update mask to indicate that it should be mutated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

