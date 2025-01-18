<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/schedule/v1/message.proto

namespace Temporal\Api\Schedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.schedule.v1.ScheduleInfo</code>
 */
class ScheduleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of actions taken so far.
     *
     * Generated from protobuf field <code>int64 action_count = 1;</code>
     */
    protected $action_count = 0;
    /**
     * Number of times a scheduled action was skipped due to missing the catchup window.
     *
     * Generated from protobuf field <code>int64 missed_catchup_window = 2;</code>
     */
    protected $missed_catchup_window = 0;
    /**
     * Number of skipped actions due to overlap.
     *
     * Generated from protobuf field <code>int64 overlap_skipped = 3;</code>
     */
    protected $overlap_skipped = 0;
    /**
     * Number of dropped actions due to buffer limit.
     *
     * Generated from protobuf field <code>int64 buffer_dropped = 10;</code>
     */
    protected $buffer_dropped = 0;
    /**
     * Number of actions in the buffer. The buffer holds the actions that cannot
     * be immediately triggered (due to the overlap policy). These actions can be a result of
     * the normal schedule or a backfill.
     *
     * Generated from protobuf field <code>int64 buffer_size = 11;</code>
     */
    protected $buffer_size = 0;
    /**
     * Currently-running workflows started by this schedule. (There might be
     * more than one if the overlap policy allows overlaps.)
     * Note that the run_ids in here are the original execution run ids as
     * started by the schedule. If the workflows retried, did continue-as-new,
     * or were reset, they might still be running but with a different run_id.
     *
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.WorkflowExecution running_workflows = 9;</code>
     */
    private $running_workflows;
    /**
     * Most recent ten actual action times (including manual triggers).
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.ScheduleActionResult recent_actions = 4;</code>
     */
    private $recent_actions;
    /**
     * Next ten scheduled action times.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Timestamp future_action_times = 5;</code>
     */
    private $future_action_times;
    /**
     * Timestamps of schedule creation and last update.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     */
    protected $create_time = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7;</code>
     */
    protected $update_time = null;
    /**
     * Generated from protobuf field <code>string invalid_schedule_error = 8 [deprecated = true];</code>
     * @deprecated
     */
    protected $invalid_schedule_error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $action_count
     *           Number of actions taken so far.
     *     @type int|string $missed_catchup_window
     *           Number of times a scheduled action was skipped due to missing the catchup window.
     *     @type int|string $overlap_skipped
     *           Number of skipped actions due to overlap.
     *     @type int|string $buffer_dropped
     *           Number of dropped actions due to buffer limit.
     *     @type int|string $buffer_size
     *           Number of actions in the buffer. The buffer holds the actions that cannot
     *           be immediately triggered (due to the overlap policy). These actions can be a result of
     *           the normal schedule or a backfill.
     *     @type array<\Temporal\Api\Common\V1\WorkflowExecution>|\Google\Protobuf\Internal\RepeatedField $running_workflows
     *           Currently-running workflows started by this schedule. (There might be
     *           more than one if the overlap policy allows overlaps.)
     *           Note that the run_ids in here are the original execution run ids as
     *           started by the schedule. If the workflows retried, did continue-as-new,
     *           or were reset, they might still be running but with a different run_id.
     *     @type array<\Temporal\Api\Schedule\V1\ScheduleActionResult>|\Google\Protobuf\Internal\RepeatedField $recent_actions
     *           Most recent ten actual action times (including manual triggers).
     *     @type array<\Google\Protobuf\Timestamp>|\Google\Protobuf\Internal\RepeatedField $future_action_times
     *           Next ten scheduled action times.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Timestamps of schedule creation and last update.
     *     @type \Google\Protobuf\Timestamp $update_time
     *     @type string $invalid_schedule_error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Schedule\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of actions taken so far.
     *
     * Generated from protobuf field <code>int64 action_count = 1;</code>
     * @return int|string
     */
    public function getActionCount()
    {
        return $this->action_count;
    }

    /**
     * Number of actions taken so far.
     *
     * Generated from protobuf field <code>int64 action_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setActionCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->action_count = $var;

        return $this;
    }

    /**
     * Number of times a scheduled action was skipped due to missing the catchup window.
     *
     * Generated from protobuf field <code>int64 missed_catchup_window = 2;</code>
     * @return int|string
     */
    public function getMissedCatchupWindow()
    {
        return $this->missed_catchup_window;
    }

    /**
     * Number of times a scheduled action was skipped due to missing the catchup window.
     *
     * Generated from protobuf field <code>int64 missed_catchup_window = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMissedCatchupWindow($var)
    {
        GPBUtil::checkInt64($var);
        $this->missed_catchup_window = $var;

        return $this;
    }

    /**
     * Number of skipped actions due to overlap.
     *
     * Generated from protobuf field <code>int64 overlap_skipped = 3;</code>
     * @return int|string
     */
    public function getOverlapSkipped()
    {
        return $this->overlap_skipped;
    }

    /**
     * Number of skipped actions due to overlap.
     *
     * Generated from protobuf field <code>int64 overlap_skipped = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOverlapSkipped($var)
    {
        GPBUtil::checkInt64($var);
        $this->overlap_skipped = $var;

        return $this;
    }

    /**
     * Number of dropped actions due to buffer limit.
     *
     * Generated from protobuf field <code>int64 buffer_dropped = 10;</code>
     * @return int|string
     */
    public function getBufferDropped()
    {
        return $this->buffer_dropped;
    }

    /**
     * Number of dropped actions due to buffer limit.
     *
     * Generated from protobuf field <code>int64 buffer_dropped = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBufferDropped($var)
    {
        GPBUtil::checkInt64($var);
        $this->buffer_dropped = $var;

        return $this;
    }

    /**
     * Number of actions in the buffer. The buffer holds the actions that cannot
     * be immediately triggered (due to the overlap policy). These actions can be a result of
     * the normal schedule or a backfill.
     *
     * Generated from protobuf field <code>int64 buffer_size = 11;</code>
     * @return int|string
     */
    public function getBufferSize()
    {
        return $this->buffer_size;
    }

    /**
     * Number of actions in the buffer. The buffer holds the actions that cannot
     * be immediately triggered (due to the overlap policy). These actions can be a result of
     * the normal schedule or a backfill.
     *
     * Generated from protobuf field <code>int64 buffer_size = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBufferSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->buffer_size = $var;

        return $this;
    }

    /**
     * Currently-running workflows started by this schedule. (There might be
     * more than one if the overlap policy allows overlaps.)
     * Note that the run_ids in here are the original execution run ids as
     * started by the schedule. If the workflows retried, did continue-as-new,
     * or were reset, they might still be running but with a different run_id.
     *
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.WorkflowExecution running_workflows = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRunningWorkflows()
    {
        return $this->running_workflows;
    }

    /**
     * Currently-running workflows started by this schedule. (There might be
     * more than one if the overlap policy allows overlaps.)
     * Note that the run_ids in here are the original execution run ids as
     * started by the schedule. If the workflows retried, did continue-as-new,
     * or were reset, they might still be running but with a different run_id.
     *
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.WorkflowExecution running_workflows = 9;</code>
     * @param array<\Temporal\Api\Common\V1\WorkflowExecution>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRunningWorkflows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->running_workflows = $arr;

        return $this;
    }

    /**
     * Most recent ten actual action times (including manual triggers).
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.ScheduleActionResult recent_actions = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecentActions()
    {
        return $this->recent_actions;
    }

    /**
     * Most recent ten actual action times (including manual triggers).
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.ScheduleActionResult recent_actions = 4;</code>
     * @param array<\Temporal\Api\Schedule\V1\ScheduleActionResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecentActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\ScheduleActionResult::class);
        $this->recent_actions = $arr;

        return $this;
    }

    /**
     * Next ten scheduled action times.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Timestamp future_action_times = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFutureActionTimes()
    {
        return $this->future_action_times;
    }

    /**
     * Next ten scheduled action times.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Timestamp future_action_times = 5;</code>
     * @param array<\Google\Protobuf\Timestamp>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFutureActionTimes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Timestamp::class);
        $this->future_action_times = $arr;

        return $this;
    }

    /**
     * Timestamps of schedule creation and last update.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
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
     * Timestamps of schedule creation and last update.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string invalid_schedule_error = 8 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getInvalidScheduleError()
    {
        if ($this->invalid_schedule_error !== '') {
            @trigger_error('invalid_schedule_error is deprecated.', E_USER_DEPRECATED);
        }
        return $this->invalid_schedule_error;
    }

    /**
     * Generated from protobuf field <code>string invalid_schedule_error = 8 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setInvalidScheduleError($var)
    {
        @trigger_error('invalid_schedule_error is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->invalid_schedule_error = $var;

        return $this;
    }

}

