<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/command/v1/message.proto

namespace Temporal\Api\Command\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.command.v1.ScheduleNexusOperationCommandAttributes</code>
 */
class ScheduleNexusOperationCommandAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Endpoint name, must exist in the endpoint registry or this command will fail.
     *
     * Generated from protobuf field <code>string endpoint = 1;</code>
     */
    protected $endpoint = '';
    /**
     * Service name.
     *
     * Generated from protobuf field <code>string service = 2;</code>
     */
    protected $service = '';
    /**
     * Operation name.
     *
     * Generated from protobuf field <code>string operation = 3;</code>
     */
    protected $operation = '';
    /**
     * Input for the operation. The server converts this into Nexus request content and the appropriate content headers
     * internally when sending the StartOperation request. On the handler side, if it is also backed by Temporal, the
     * content is transformed back to the original Payload sent in this command.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payload input = 4;</code>
     */
    protected $input = null;
    /**
     * Schedule-to-close timeout for this operation.
     * Indicates how long the caller is willing to wait for operation completion.
     * Calls are retried internally by the server.
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_close_timeout = 5;</code>
     */
    protected $schedule_to_close_timeout = null;
    /**
     * Header to attach to the Nexus request.
     * Users are responsible for encrypting sensitive data in this header as it is stored in workflow history and
     * transmitted to external services as-is.
     * This is useful for propagating tracing information.
     * Note these headers are not the same as Temporal headers on internal activities and child workflows, these are
     * transmitted to Nexus operations that may be external and are not traditional payloads.
     *
     * Generated from protobuf field <code>map<string, string> nexus_header = 6;</code>
     */
    private $nexus_header;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $endpoint
     *           Endpoint name, must exist in the endpoint registry or this command will fail.
     *     @type string $service
     *           Service name.
     *     @type string $operation
     *           Operation name.
     *     @type \Temporal\Api\Common\V1\Payload $input
     *           Input for the operation. The server converts this into Nexus request content and the appropriate content headers
     *           internally when sending the StartOperation request. On the handler side, if it is also backed by Temporal, the
     *           content is transformed back to the original Payload sent in this command.
     *     @type \Google\Protobuf\Duration $schedule_to_close_timeout
     *           Schedule-to-close timeout for this operation.
     *           Indicates how long the caller is willing to wait for operation completion.
     *           Calls are retried internally by the server.
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     *     @type array|\Google\Protobuf\Internal\MapField $nexus_header
     *           Header to attach to the Nexus request.
     *           Users are responsible for encrypting sensitive data in this header as it is stored in workflow history and
     *           transmitted to external services as-is.
     *           This is useful for propagating tracing information.
     *           Note these headers are not the same as Temporal headers on internal activities and child workflows, these are
     *           transmitted to Nexus operations that may be external and are not traditional payloads.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Command\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Endpoint name, must exist in the endpoint registry or this command will fail.
     *
     * Generated from protobuf field <code>string endpoint = 1;</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Endpoint name, must exist in the endpoint registry or this command will fail.
     *
     * Generated from protobuf field <code>string endpoint = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * Service name.
     *
     * Generated from protobuf field <code>string service = 2;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Service name.
     *
     * Generated from protobuf field <code>string service = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Operation name.
     *
     * Generated from protobuf field <code>string operation = 3;</code>
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Operation name.
     *
     * Generated from protobuf field <code>string operation = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation = $var;

        return $this;
    }

    /**
     * Input for the operation. The server converts this into Nexus request content and the appropriate content headers
     * internally when sending the StartOperation request. On the handler side, if it is also backed by Temporal, the
     * content is transformed back to the original Payload sent in this command.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payload input = 4;</code>
     * @return \Temporal\Api\Common\V1\Payload|null
     */
    public function getInput()
    {
        return $this->input;
    }

    public function hasInput()
    {
        return isset($this->input);
    }

    public function clearInput()
    {
        unset($this->input);
    }

    /**
     * Input for the operation. The server converts this into Nexus request content and the appropriate content headers
     * internally when sending the StartOperation request. On the handler side, if it is also backed by Temporal, the
     * content is transformed back to the original Payload sent in this command.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payload input = 4;</code>
     * @param \Temporal\Api\Common\V1\Payload $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payload::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Schedule-to-close timeout for this operation.
     * Indicates how long the caller is willing to wait for operation completion.
     * Calls are retried internally by the server.
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_close_timeout = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getScheduleToCloseTimeout()
    {
        return $this->schedule_to_close_timeout;
    }

    public function hasScheduleToCloseTimeout()
    {
        return isset($this->schedule_to_close_timeout);
    }

    public function clearScheduleToCloseTimeout()
    {
        unset($this->schedule_to_close_timeout);
    }

    /**
     * Schedule-to-close timeout for this operation.
     * Indicates how long the caller is willing to wait for operation completion.
     * Calls are retried internally by the server.
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_close_timeout = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setScheduleToCloseTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->schedule_to_close_timeout = $var;

        return $this;
    }

    /**
     * Header to attach to the Nexus request.
     * Users are responsible for encrypting sensitive data in this header as it is stored in workflow history and
     * transmitted to external services as-is.
     * This is useful for propagating tracing information.
     * Note these headers are not the same as Temporal headers on internal activities and child workflows, these are
     * transmitted to Nexus operations that may be external and are not traditional payloads.
     *
     * Generated from protobuf field <code>map<string, string> nexus_header = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getNexusHeader()
    {
        return $this->nexus_header;
    }

    /**
     * Header to attach to the Nexus request.
     * Users are responsible for encrypting sensitive data in this header as it is stored in workflow history and
     * transmitted to external services as-is.
     * This is useful for propagating tracing information.
     * Note these headers are not the same as Temporal headers on internal activities and child workflows, these are
     * transmitted to Nexus operations that may be external and are not traditional payloads.
     *
     * Generated from protobuf field <code>map<string, string> nexus_header = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setNexusHeader($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->nexus_header = $arr;

        return $this;
    }

}

