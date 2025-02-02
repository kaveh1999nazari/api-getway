<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/deployment/v1/message.proto

namespace Temporal\Api\Deployment\V1\DeploymentInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.deployment.v1.DeploymentInfo.TaskQueueInfo</code>
 */
class TaskQueueInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.TaskQueueType type = 2;</code>
     */
    protected $type = 0;
    /**
     * When server saw the first poller for this task queue in this deployment.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_poller_time = 3;</code>
     */
    protected $first_poller_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type int $type
     *     @type \Google\Protobuf\Timestamp $first_poller_time
     *           When server saw the first poller for this task queue in this deployment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Deployment\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.TaskQueueType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.TaskQueueType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\TaskQueueType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * When server saw the first poller for this task queue in this deployment.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_poller_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFirstPollerTime()
    {
        return $this->first_poller_time;
    }

    public function hasFirstPollerTime()
    {
        return isset($this->first_poller_time);
    }

    public function clearFirstPollerTime()
    {
        unset($this->first_poller_time);
    }

    /**
     * When server saw the first poller for this task queue in this deployment.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_poller_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFirstPollerTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->first_poller_time = $var;

        return $this;
    }

}

