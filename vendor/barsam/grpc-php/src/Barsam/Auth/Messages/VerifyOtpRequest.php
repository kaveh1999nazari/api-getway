<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth/messages/verify_otp.proto

namespace Barsam\Auth\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the request message
 *
 * Generated from protobuf message <code>barsam.auth.messages.VerifyOtpRequest</code>
 */
class VerifyOtpRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string login_id = 1;</code>
     */
    protected $login_id = '';
    /**
     * Generated from protobuf field <code>string code = 2;</code>
     */
    protected $code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $login_id
     *     @type string $code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Auth\Messages\VerifyOtp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string login_id = 1;</code>
     * @return string
     */
    public function getLoginId()
    {
        return $this->login_id;
    }

    /**
     * Generated from protobuf field <code>string login_id = 1;</code>
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
     * Generated from protobuf field <code>string code = 2;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

}

