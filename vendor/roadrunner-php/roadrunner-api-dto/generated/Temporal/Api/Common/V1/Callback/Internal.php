<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/common/v1/message.proto

namespace Temporal\Api\Common\V1\Callback;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Callbacks to be delivered internally within the system.
 * This variant is not settable in the API and will be rejected by the service with an INVALID_ARGUMENT error.
 * The only reason that this is exposed is because callbacks are replicated across clusters via the
 * WorkflowExecutionStarted event, which is defined in the public API.
 *
 * Generated from protobuf message <code>temporal.api.common.v1.Callback.Internal</code>
 */
class Internal extends \Google\Protobuf\Internal\Message
{
    /**
     * Opaque internal data.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     *           Opaque internal data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Common\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Opaque internal data.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Opaque internal data.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

