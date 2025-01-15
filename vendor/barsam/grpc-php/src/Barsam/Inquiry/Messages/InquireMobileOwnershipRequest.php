<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: inquiry/messages/inquire_mobile_ownership.proto

namespace Barsam\Inquiry\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the request message
 *
 * Generated from protobuf message <code>barsam.inquiry.messages.InquireMobileOwnershipRequest</code>
 */
class InquireMobileOwnershipRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The mobile number to inquire
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     */
    protected $mobile = '';
    /**
     * The national id of the person to match with the mobile ownership
     *
     * Generated from protobuf field <code>string national_id = 2;</code>
     */
    protected $national_id = '';
    /**
     * Use the cache to get the result
     *
     * Generated from protobuf field <code>bool use_cache = 3;</code>
     */
    protected $use_cache = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mobile
     *           The mobile number to inquire
     *     @type string $national_id
     *           The national id of the person to match with the mobile ownership
     *     @type bool $use_cache
     *           Use the cache to get the result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Inquiry\Messages\InquireMobileOwnership::initOnce();
        parent::__construct($data);
    }

    /**
     * The mobile number to inquire
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * The mobile number to inquire
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile = $var;

        return $this;
    }

    /**
     * The national id of the person to match with the mobile ownership
     *
     * Generated from protobuf field <code>string national_id = 2;</code>
     * @return string
     */
    public function getNationalId()
    {
        return $this->national_id;
    }

    /**
     * The national id of the person to match with the mobile ownership
     *
     * Generated from protobuf field <code>string national_id = 2;</code>
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
     * Use the cache to get the result
     *
     * Generated from protobuf field <code>bool use_cache = 3;</code>
     * @return bool
     */
    public function getUseCache()
    {
        return $this->use_cache;
    }

    /**
     * Use the cache to get the result
     *
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

