<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: otp/messages/generate.proto

namespace Barsam\Otp\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the request message
 *
 * Generated from protobuf message <code>barsam.otp.messages.GenerateRequest</code>
 */
class GenerateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique identifier for OTP (for example user id for login)
     * In order to verify the code in the next step you need the identifier
     *
     * Generated from protobuf field <code>string identifier = 1;</code>
     */
    protected $identifier = '';
    /**
     * The seconds for expiration time of the code
     *
     * Generated from protobuf field <code>uint32 expire_seconds = 2;</code>
     */
    protected $expire_seconds = 0;
    /**
     * Do expire the latest generated codes or not? (default: true)
     *
     * Generated from protobuf field <code>bool expire_latest = 3;</code>
     */
    protected $expire_latest = false;
    /**
     * The channel that the code generation is requested from
     * It will prevent from expiring the latest generated codes on other channels
     *
     * Generated from protobuf field <code>string channel = 4;</code>
     */
    protected $channel = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $identifier
     *           A unique identifier for OTP (for example user id for login)
     *           In order to verify the code in the next step you need the identifier
     *     @type int $expire_seconds
     *           The seconds for expiration time of the code
     *     @type bool $expire_latest
     *           Do expire the latest generated codes or not? (default: true)
     *     @type string $channel
     *           The channel that the code generation is requested from
     *           It will prevent from expiring the latest generated codes on other channels
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Otp\Messages\Generate::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique identifier for OTP (for example user id for login)
     * In order to verify the code in the next step you need the identifier
     *
     * Generated from protobuf field <code>string identifier = 1;</code>
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier for OTP (for example user id for login)
     * In order to verify the code in the next step you need the identifier
     *
     * Generated from protobuf field <code>string identifier = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->identifier = $var;

        return $this;
    }

    /**
     * The seconds for expiration time of the code
     *
     * Generated from protobuf field <code>uint32 expire_seconds = 2;</code>
     * @return int
     */
    public function getExpireSeconds()
    {
        return $this->expire_seconds;
    }

    /**
     * The seconds for expiration time of the code
     *
     * Generated from protobuf field <code>uint32 expire_seconds = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setExpireSeconds($var)
    {
        GPBUtil::checkUint32($var);
        $this->expire_seconds = $var;

        return $this;
    }

    /**
     * Do expire the latest generated codes or not? (default: true)
     *
     * Generated from protobuf field <code>bool expire_latest = 3;</code>
     * @return bool
     */
    public function getExpireLatest()
    {
        return $this->expire_latest;
    }

    /**
     * Do expire the latest generated codes or not? (default: true)
     *
     * Generated from protobuf field <code>bool expire_latest = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setExpireLatest($var)
    {
        GPBUtil::checkBool($var);
        $this->expire_latest = $var;

        return $this;
    }

    /**
     * The channel that the code generation is requested from
     * It will prevent from expiring the latest generated codes on other channels
     *
     * Generated from protobuf field <code>string channel = 4;</code>
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * The channel that the code generation is requested from
     * It will prevent from expiring the latest generated codes on other channels
     *
     * Generated from protobuf field <code>string channel = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel = $var;

        return $this;
    }

}

