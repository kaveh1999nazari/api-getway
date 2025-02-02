<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: notification/messages/send_by_template.proto

namespace Barsam\Notification\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the response message
 *
 * Generated from protobuf message <code>barsam.notification.messages.SendByTemplateResponse</code>
 */
class SendByTemplateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message_id = 1;</code>
     */
    protected $message_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Notification\Messages\SendByTemplate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string message_id = 1;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Generated from protobuf field <code>string message_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_id = $var;

        return $this;
    }

}

