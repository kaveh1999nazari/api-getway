<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/models/user.proto

namespace Barsam\User\Models;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>barsam.user.models.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string login_id = 2;</code>
     */
    protected $login_id = '';
    /**
     * Generated from protobuf field <code>string password = 3;</code>
     */
    protected $password = '';
    /**
     * Generated from protobuf field <code>bool is_merchant = 4;</code>
     */
    protected $is_merchant = false;
    /**
     * The user's meta fields
     *
     * Generated from protobuf field <code>repeated .barsam.user.models.UserMeta user_metas = 5;</code>
     */
    private $user_metas;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 6;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 7;</code>
     */
    protected $updated_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp deleted_at = 8;</code>
     */
    protected $deleted_at = null;
    /**
     * Generated from protobuf field <code>bool is_active = 9;</code>
     */
    protected $is_active = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $login_id
     *     @type string $password
     *     @type bool $is_merchant
     *     @type array<\Barsam\User\Models\UserMeta>|\Google\Protobuf\Internal\RepeatedField $user_metas
     *           The user's meta fields
     *     @type \Google\Protobuf\Timestamp $created_at
     *     @type \Google\Protobuf\Timestamp $updated_at
     *     @type \Google\Protobuf\Timestamp $deleted_at
     *     @type bool $is_active
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\User\Models\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string login_id = 2;</code>
     * @return string
     */
    public function getLoginId()
    {
        return $this->login_id;
    }

    /**
     * Generated from protobuf field <code>string login_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLoginId($var)
    {
        GPBUtil::checkString($var, True);
        $this->login_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 3;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_merchant = 4;</code>
     * @return bool
     */
    public function getIsMerchant()
    {
        return $this->is_merchant;
    }

    /**
     * Generated from protobuf field <code>bool is_merchant = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsMerchant($var)
    {
        GPBUtil::checkBool($var);
        $this->is_merchant = $var;

        return $this;
    }

    /**
     * The user's meta fields
     *
     * Generated from protobuf field <code>repeated .barsam.user.models.UserMeta user_metas = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserMetas()
    {
        return $this->user_metas;
    }

    /**
     * The user's meta fields
     *
     * Generated from protobuf field <code>repeated .barsam.user.models.UserMeta user_metas = 5;</code>
     * @param array<\Barsam\User\Models\UserMeta>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserMetas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Barsam\User\Models\UserMeta::class);
        $this->user_metas = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function hasUpdatedAt()
    {
        return isset($this->updated_at);
    }

    public function clearUpdatedAt()
    {
        unset($this->updated_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp deleted_at = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    public function hasDeletedAt()
    {
        return isset($this->deleted_at);
    }

    public function clearDeletedAt()
    {
        unset($this->deleted_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp deleted_at = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeletedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->deleted_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_active = 9;</code>
     * @return bool
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Generated from protobuf field <code>bool is_active = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsActive($var)
    {
        GPBUtil::checkBool($var);
        $this->is_active = $var;

        return $this;
    }

}

