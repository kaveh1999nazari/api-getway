<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.SetCurrentDeploymentResponse</code>
 */
class SetCurrentDeploymentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.deployment.v1.DeploymentInfo current_deployment_info = 1;</code>
     */
    protected $current_deployment_info = null;
    /**
     * Info of the deployment that was current before executing this operation.
     *
     * Generated from protobuf field <code>.temporal.api.deployment.v1.DeploymentInfo previous_deployment_info = 2;</code>
     */
    protected $previous_deployment_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Deployment\V1\DeploymentInfo $current_deployment_info
     *     @type \Temporal\Api\Deployment\V1\DeploymentInfo $previous_deployment_info
     *           Info of the deployment that was current before executing this operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.deployment.v1.DeploymentInfo current_deployment_info = 1;</code>
     * @return \Temporal\Api\Deployment\V1\DeploymentInfo|null
     */
    public function getCurrentDeploymentInfo()
    {
        return $this->current_deployment_info;
    }

    public function hasCurrentDeploymentInfo()
    {
        return isset($this->current_deployment_info);
    }

    public function clearCurrentDeploymentInfo()
    {
        unset($this->current_deployment_info);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.deployment.v1.DeploymentInfo current_deployment_info = 1;</code>
     * @param \Temporal\Api\Deployment\V1\DeploymentInfo $var
     * @return $this
     */
    public function setCurrentDeploymentInfo($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Deployment\V1\DeploymentInfo::class);
        $this->current_deployment_info = $var;

        return $this;
    }

    /**
     * Info of the deployment that was current before executing this operation.
     *
     * Generated from protobuf field <code>.temporal.api.deployment.v1.DeploymentInfo previous_deployment_info = 2;</code>
     * @return \Temporal\Api\Deployment\V1\DeploymentInfo|null
     */
    public function getPreviousDeploymentInfo()
    {
        return $this->previous_deployment_info;
    }

    public function hasPreviousDeploymentInfo()
    {
        return isset($this->previous_deployment_info);
    }

    public function clearPreviousDeploymentInfo()
    {
        unset($this->previous_deployment_info);
    }

    /**
     * Info of the deployment that was current before executing this operation.
     *
     * Generated from protobuf field <code>.temporal.api.deployment.v1.DeploymentInfo previous_deployment_info = 2;</code>
     * @param \Temporal\Api\Deployment\V1\DeploymentInfo $var
     * @return $this
     */
    public function setPreviousDeploymentInfo($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Deployment\V1\DeploymentInfo::class);
        $this->previous_deployment_info = $var;

        return $this;
    }

}

