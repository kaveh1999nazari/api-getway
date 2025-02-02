<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth/messages/get_sessions.proto

namespace Barsam\Auth\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the response message
 *
 * Generated from protobuf message <code>barsam.auth.messages.GetSessionsResponse</code>
 */
class GetSessionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .barsam.auth.models.Session sessions = 1;</code>
     */
    private $sessions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Barsam\Auth\Models\Session>|\Google\Protobuf\Internal\RepeatedField $sessions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Auth\Messages\GetSessions::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .barsam.auth.models.Session sessions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    /**
     * Generated from protobuf field <code>repeated .barsam.auth.models.Session sessions = 1;</code>
     * @param array<\Barsam\Auth\Models\Session>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSessions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Barsam\Auth\Models\Session::class);
        $this->sessions = $arr;

        return $this;
    }

}

