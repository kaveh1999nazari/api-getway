<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: inquiry/messages/inquire_person.proto

namespace Barsam\Inquiry\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the request message
 *
 * Generated from protobuf message <code>barsam.inquiry.messages.InquirePersonRequest</code>
 */
class InquirePersonRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string national_id = 1;</code>
     */
    protected $national_id = '';
    /**
     * Generated from protobuf field <code>string birth_date = 2;</code>
     */
    protected $birth_date = '';
    /**
     * Generated from protobuf field <code>bool use_cache = 3;</code>
     */
    protected $use_cache = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $national_id
     *     @type string $birth_date
     *     @type bool $use_cache
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Inquiry\Messages\InquirePerson::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string national_id = 1;</code>
     * @return string
     */
    public function getNationalId()
    {
        return $this->national_id;
    }

    /**
     * Generated from protobuf field <code>string national_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNationalId($var)
    {
        GPBUtil::checkString($var, True);
        $this->national_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string birth_date = 2;</code>
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * Generated from protobuf field <code>string birth_date = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBirthDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->birth_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool use_cache = 3;</code>
     * @return bool
     */
    public function getUseCache()
    {
        return $this->use_cache;
    }

    /**
     * Generated from protobuf field <code>bool use_cache = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseCache($var)
    {
        GPBUtil::checkBool($var);
        $this->use_cache = $var;

        return $this;
    }

}

