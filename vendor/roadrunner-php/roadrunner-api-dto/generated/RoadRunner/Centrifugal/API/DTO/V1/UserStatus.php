<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.UserStatus</code>
 */
class UserStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user = 1;</code>
     */
    protected $user = '';
    /**
     * Generated from protobuf field <code>int64 active = 2;</code>
     */
    protected $active = 0;
    /**
     * Generated from protobuf field <code>int64 online = 3;</code>
     */
    protected $online = 0;
    /**
     * Generated from protobuf field <code>string state = 4;</code>
     */
    protected $state = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user
     *     @type int|string $active
     *     @type int|string $online
     *     @type string $state
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user = 1;</code>
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>string user = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 active = 2;</code>
     * @return int|string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Generated from protobuf field <code>int64 active = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setActive($var)
    {
        GPBUtil::checkInt64($var);
        $this->active = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 online = 3;</code>
     * @return int|string
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Generated from protobuf field <code>int64 online = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOnline($var)
    {
        GPBUtil::checkInt64($var);
        $this->online = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string state = 4;</code>
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>string state = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

}

