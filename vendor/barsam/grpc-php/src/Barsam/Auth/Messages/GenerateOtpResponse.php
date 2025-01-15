<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth/messages/generate_otp.proto

namespace Barsam\Auth\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the response message
 *
 * Generated from protobuf message <code>barsam.auth.messages.GenerateOtpResponse</code>
 */
class GenerateOtpResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string code = 1;</code>
     */
    protected $code = '';
    /**
     * The generated OTP qr code (if method is Authenticator)
     *
     * Generated from protobuf field <code>string qr_code_url = 2;</code>
     */
    protected $qr_code_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code
     *     @type string $qr_code_url
     *           The generated OTP qr code (if method is Authenticator)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Auth\Messages\GenerateOtp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * The generated OTP qr code (if method is Authenticator)
     *
     * Generated from protobuf field <code>string qr_code_url = 2;</code>
     * @return string
     */
    public function getQrCodeUrl()
    {
        return $this->qr_code_url;
    }

    /**
     * The generated OTP qr code (if method is Authenticator)
     *
     * Generated from protobuf field <code>string qr_code_url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQrCodeUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->qr_code_url = $var;

        return $this;
    }

}

