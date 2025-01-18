<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/taskqueue/v1/message.proto

namespace Temporal\Api\Taskqueue\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.taskqueue.v1.TimestampedBuildIdAssignmentRule</code>
 */
class TimestampedBuildIdAssignmentRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.BuildIdAssignmentRule rule = 1;</code>
     */
    protected $rule = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     */
    protected $create_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Taskqueue\V1\BuildIdAssignmentRule $rule
     *     @type \Google\Protobuf\Timestamp $create_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Taskqueue\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.BuildIdAssignmentRule rule = 1;</code>
     * @return \Temporal\Api\Taskqueue\V1\BuildIdAssignmentRule|null
     */
    public function getRule()
    {
        return $this->rule;
    }

    public function hasRule()
    {
        return isset($this->rule);
    }

    public function clearRule()
    {
        unset($this->rule);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.BuildIdAssignmentRule rule = 1;</code>
     * @param \Temporal\Api\Taskqueue\V1\BuildIdAssignmentRule $var
     * @return $this
     */
    public function setRule($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\BuildIdAssignmentRule::class);
        $this->rule = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

}

