<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/taskqueue/v1/message.proto

namespace Temporal\Api\Taskqueue\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Reachability of tasks for a worker by build id, in one or more task queues.
 *
 * Generated from protobuf message <code>temporal.api.taskqueue.v1.BuildIdReachability</code>
 */
class BuildIdReachability extends \Google\Protobuf\Internal\Message
{
    /**
     * A build id or empty if unversioned.
     *
     * Generated from protobuf field <code>string build_id = 1;</code>
     */
    protected $build_id = '';
    /**
     * Reachability per task queue.
     *
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.TaskQueueReachability task_queue_reachability = 2;</code>
     */
    private $task_queue_reachability;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $build_id
     *           A build id or empty if unversioned.
     *     @type array<\Temporal\Api\Taskqueue\V1\TaskQueueReachability>|\Google\Protobuf\Internal\RepeatedField $task_queue_reachability
     *           Reachability per task queue.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Taskqueue\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * A build id or empty if unversioned.
     *
     * Generated from protobuf field <code>string build_id = 1;</code>
     * @return string
     */
    public function getBuildId()
    {
        return $this->build_id;
    }

    /**
     * A build id or empty if unversioned.
     *
     * Generated from protobuf field <code>string build_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBuildId($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_id = $var;

        return $this;
    }

    /**
     * Reachability per task queue.
     *
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.TaskQueueReachability task_queue_reachability = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTaskQueueReachability()
    {
        return $this->task_queue_reachability;
    }

    /**
     * Reachability per task queue.
     *
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.TaskQueueReachability task_queue_reachability = 2;</code>
     * @param array<\Temporal\Api\Taskqueue\V1\TaskQueueReachability>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTaskQueueReachability($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Taskqueue\V1\TaskQueueReachability::class);
        $this->task_queue_reachability = $arr;

        return $this;
    }

}

