<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/messages/get.proto

namespace Barsam\User\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the response message
 *
 * Generated from protobuf message <code>barsam.user.messages.GetResponse</code>
 */
class GetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The user
     *
     * Generated from protobuf field <code>.barsam.user.models.User user = 1;</code>
     */
    protected $user = null;
    /**
     * The user's meta fields
     *
     * Generated from protobuf field <code>repeated .barsam.user.models.UserMeta user_metas = 2;</code>
     */
    private $user_metas;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Barsam\User\Models\User $user
     *           The user
     *     @type array<\Barsam\User\Models\UserMeta>|\Google\Protobuf\Internal\RepeatedField $user_metas
     *           The user's meta fields
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\User\Messages\Get::initOnce();
        parent::__construct($data);
    }

    /**
     * The user
     *
     * Generated from protobuf field <code>.barsam.user.models.User user = 1;</code>
     * @return \Barsam\User\Models\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * The user
     *
     * Generated from protobuf field <code>.barsam.user.models.User user = 1;</code>
     * @param \Barsam\User\Models\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Barsam\User\Models\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * The user's meta fields
     *
     * Generated from protobuf field <code>repeated .barsam.user.models.UserMeta user_metas = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserMetas()
    {
        return $this->user_metas;
    }

    /**
     * The user's meta fields
     *
     * Generated from protobuf field <code>repeated .barsam.user.models.UserMeta user_metas = 2;</code>
     * @param array<\Barsam\User\Models\UserMeta>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserMetas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Barsam\User\Models\UserMeta::class);
        $this->user_metas = $arr;

        return $this;
    }

}

