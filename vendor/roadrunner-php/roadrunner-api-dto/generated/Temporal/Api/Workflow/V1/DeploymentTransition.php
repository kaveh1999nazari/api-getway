<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflow/v1/message.proto

namespace Temporal\Api\Workflow\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Holds information about ongoing transition of a workflow execution from one deployment to another.
 * Experimental. Deployment transition is experimental and might change in the future.
 *
 * Generated from protobuf message <code>temporal.api.workflow.v1.DeploymentTransition</code>
 */
class DeploymentTransition extends \Google\Protobuf\Internal\Message
{
    /**
     * The target deployment of the transition. Null means a so-far-versioned workflow is
     * transitioning to unversioned workers.
     *
     * Generated from protobuf field <code>.temporal.api.deployment.v1.Deployment deployment = 1;</code>
     */
    protected $deployment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Deployment\V1\Deployment $deployment
     *           The target deployment of the transition. Null means a so-far-versioned workflow is
     *           transitioning to unversioned workers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflow\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * The target deployment of the transition. Null means a so-far-versioned workflow is
     * transitioning to unversioned workers.
     *
     * Generated from protobuf field <code>.temporal.api.deployment.v1.Deployment deployment = 1;</code>
     * @return \Temporal\Api\Deployment\V1\Deployment|null
     */
    public function getDeployment()
    {
        return $this->deployment;
    }

    public function hasDeployment()
    {
        return isset($this->deployment);
    }

    public function clearDeployment()
    {
        unset($this->deployment);
    }

    /**
     * The target deployment of the transition. Null means a so-far-versioned workflow is
     * transitioning to unversioned workers.
     *
     * Generated from protobuf field <code>.temporal.api.deployment.v1.Deployment deployment = 1;</code>
     * @param \Temporal\Api\Deployment\V1\Deployment $var
     * @return $this
     */
    public function setDeployment($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Deployment\V1\Deployment::class);
        $this->deployment = $var;

        return $this;
    }

}

