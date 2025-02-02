<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: payment/messages/verify.proto

namespace Barsam\Payment\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the response message
 *
 * Generated from protobuf message <code>barsam.payment.messages.VerifyResponse</code>
 */
class VerifyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the payment is verified or not
     *
     * Generated from protobuf field <code>bool is_verified = 1;</code>
     */
    protected $is_verified = false;
    /**
     * Whether the payment is double spent or not
     *
     * Generated from protobuf field <code>bool is_double_spent = 2;</code>
     */
    protected $is_double_spent = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_verified
     *           Whether the payment is verified or not
     *     @type bool $is_double_spent
     *           Whether the payment is double spent or not
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Payment\Messages\Verify::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the payment is verified or not
     *
     * Generated from protobuf field <code>bool is_verified = 1;</code>
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->is_verified;
    }

    /**
     * Whether the payment is verified or not
     *
     * Generated from protobuf field <code>bool is_verified = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->is_verified = $var;

        return $this;
    }

    /**
     * Whether the payment is double spent or not
     *
     * Generated from protobuf field <code>bool is_double_spent = 2;</code>
     * @return bool
     */
    public function getIsDoubleSpent()
    {
        return $this->is_double_spent;
    }

    /**
     * Whether the payment is double spent or not
     *
     * Generated from protobuf field <code>bool is_double_spent = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDoubleSpent($var)
    {
        GPBUtil::checkBool($var);
        $this->is_double_spent = $var;

        return $this;
    }

}

