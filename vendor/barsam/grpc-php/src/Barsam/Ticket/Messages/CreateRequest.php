<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ticket/messages/create.proto

namespace Barsam\Ticket\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the request message
 *
 * Generated from protobuf message <code>barsam.ticket.messages.CreateRequest</code>
 */
class CreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 department_id = 1;</code>
     */
    protected $department_id = 0;
    /**
     * Generated from protobuf field <code>uint64 user_id = 2;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>string title = 3;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>string body = 4;</code>
     */
    protected $body = '';
    /**
     * Generated from protobuf field <code>repeated string files = 5;</code>
     */
    private $files;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $department_id
     *     @type int|string $user_id
     *     @type string $title
     *     @type string $body
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $files
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ticket\Messages\Create::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 department_id = 1;</code>
     * @return int|string
     */
    public function getDepartmentId()
    {
        return $this->department_id;
    }

    /**
     * Generated from protobuf field <code>uint64 department_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDepartmentId($var)
    {
        GPBUtil::checkUint64($var);
        $this->department_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 2;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 3;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string body = 4;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Generated from protobuf field <code>string body = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, True);
        $this->body = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string files = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Generated from protobuf field <code>repeated string files = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->files = $arr;

        return $this;
    }

}

