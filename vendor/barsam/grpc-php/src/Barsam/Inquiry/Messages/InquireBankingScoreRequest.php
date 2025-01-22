<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: inquiry/messages/inquire_banking_score.proto

namespace Barsam\Inquiry\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the request message
 *
 * Generated from protobuf message <code>barsam.inquiry.messages.InquireBankingScoreRequest</code>
 */
class InquireBankingScoreRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The national ID of the user
     *
     * Generated from protobuf field <code>string national_id = 1;</code>
     */
    protected $national_id = '';
    /**
     * The mobile number of the user
     *
     * Generated from protobuf field <code>string mobile = 2;</code>
     */
    protected $mobile = '';
    /**
     * Whether to use the cache or not
     *
     * Generated from protobuf field <code>bool use_cache = 4;</code>
     */
    protected $use_cache = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $national_id
     *           The national ID of the user
     *     @type string $mobile
     *           The mobile number of the user
     *     @type bool $use_cache
     *           Whether to use the cache or not
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Inquiry\Messages\InquireBankingScore::initOnce();
        parent::__construct($data);
    }

    /**
     * The national ID of the user
     *
     * Generated from protobuf field <code>string national_id = 1;</code>
     * @return string
     */
    public function getNationalId()
    {
        return $this->national_id;
    }

    /**
     * The national ID of the user
     *
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
     * The mobile number of the user
     *
     * Generated from protobuf field <code>string mobile = 2;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * The mobile number of the user
     *
     * Generated from protobuf field <code>string mobile = 2;</code>
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
     * Whether to use the cache or not
     *
     * Generated from protobuf field <code>bool use_cache = 4;</code>
     * @return bool
     */
    public function getUseCache()
    {
        return $this->use_cache;
    }

    /**
     * Whether to use the cache or not
     *
     * Generated from protobuf field <code>bool use_cache = 4;</code>
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

