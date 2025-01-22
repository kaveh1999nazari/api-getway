<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wallet/messages/request.proto

namespace Barsam\Wallet\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the request message
 *
 * Generated from protobuf message <code>barsam.wallet.messages.RequestRequest</code>
 */
class RequestRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The linked transaction id
     *
     * Generated from protobuf field <code>uint64 transaction_id = 1;</code>
     */
    protected $transaction_id = 0;
    /**
     * The user's id
     *
     * Generated from protobuf field <code>uint64 user_id = 2;</code>
     */
    protected $user_id = 0;
    /**
     * The amount of the payment in IRR
     *
     * Generated from protobuf field <code>string amount = 3;</code>
     */
    protected $amount = '';
    /**
     * The URL to redirect the user to after payment
     *
     * Generated from protobuf field <code>string callback_url = 4;</code>
     */
    protected $callback_url = '';
    /**
     * Description of the payment
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Payer mobile to show the saved cards in ipg (if ipg supports it)
     *
     * Generated from protobuf field <code>string payer_mobile = 6;</code>
     */
    protected $payer_mobile = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $transaction_id
     *           The linked transaction id
     *     @type int|string $user_id
     *           The user's id
     *     @type string $amount
     *           The amount of the payment in IRR
     *     @type string $callback_url
     *           The URL to redirect the user to after payment
     *     @type string $description
     *           Description of the payment
     *     @type string $payer_mobile
     *           Payer mobile to show the saved cards in ipg (if ipg supports it)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Wallet\Messages\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * The linked transaction id
     *
     * Generated from protobuf field <code>uint64 transaction_id = 1;</code>
     * @return int|string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * The linked transaction id
     *
     * Generated from protobuf field <code>uint64 transaction_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkUint64($var);
        $this->transaction_id = $var;

        return $this;
    }

    /**
     * The user's id
     *
     * Generated from protobuf field <code>uint64 user_id = 2;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The user's id
     *
     * Generated from protobuf field <code>uint64 user_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * The amount of the payment in IRR
     *
     * Generated from protobuf field <code>string amount = 3;</code>
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * The amount of the payment in IRR
     *
     * Generated from protobuf field <code>string amount = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->amount = $var;

        return $this;
    }

    /**
     * The URL to redirect the user to after payment
     *
     * Generated from protobuf field <code>string callback_url = 4;</code>
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callback_url;
    }

    /**
     * The URL to redirect the user to after payment
     *
     * Generated from protobuf field <code>string callback_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->callback_url = $var;

        return $this;
    }

    /**
     * Description of the payment
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the payment
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Payer mobile to show the saved cards in ipg (if ipg supports it)
     *
     * Generated from protobuf field <code>string payer_mobile = 6;</code>
     * @return string
     */
    public function getPayerMobile()
    {
        return $this->payer_mobile;
    }

    /**
     * Payer mobile to show the saved cards in ipg (if ipg supports it)
     *
     * Generated from protobuf field <code>string payer_mobile = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPayerMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->payer_mobile = $var;

        return $this;
    }

}

