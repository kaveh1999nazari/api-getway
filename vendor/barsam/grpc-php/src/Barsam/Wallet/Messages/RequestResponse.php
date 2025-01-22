<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wallet/messages/request.proto

namespace Barsam\Wallet\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the response message
 *
 * Generated from protobuf message <code>barsam.wallet.messages.RequestResponse</code>
 */
class RequestResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The id of the payment for tracking purposes
     *
     * Generated from protobuf field <code>uint64 payment_id = 1;</code>
     */
    protected $payment_id = 0;
    /**
     * The type of the payment (redirect or form)
     *
     * Generated from protobuf field <code>.barsam.wallet.enums.PaymentType type = 2;</code>
     */
    protected $type = 0;
    /**
     * The URL to redirect the user to (or submit the form to)
     *
     * Generated from protobuf field <code>string payment_url = 3;</code>
     */
    protected $payment_url = '';
    /**
     * The form data to submit to the payment gateway (if type is form)
     *
     * Generated from protobuf field <code>map<string, string> data = 4;</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $payment_id
     *           The id of the payment for tracking purposes
     *     @type int $type
     *           The type of the payment (redirect or form)
     *     @type string $payment_url
     *           The URL to redirect the user to (or submit the form to)
     *     @type array|\Google\Protobuf\Internal\MapField $data
     *           The form data to submit to the payment gateway (if type is form)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Wallet\Messages\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * The id of the payment for tracking purposes
     *
     * Generated from protobuf field <code>uint64 payment_id = 1;</code>
     * @return int|string
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }

    /**
     * The id of the payment for tracking purposes
     *
     * Generated from protobuf field <code>uint64 payment_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPaymentId($var)
    {
        GPBUtil::checkUint64($var);
        $this->payment_id = $var;

        return $this;
    }

    /**
     * The type of the payment (redirect or form)
     *
     * Generated from protobuf field <code>.barsam.wallet.enums.PaymentType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the payment (redirect or form)
     *
     * Generated from protobuf field <code>.barsam.wallet.enums.PaymentType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Barsam\Wallet\Enums\PaymentType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The URL to redirect the user to (or submit the form to)
     *
     * Generated from protobuf field <code>string payment_url = 3;</code>
     * @return string
     */
    public function getPaymentUrl()
    {
        return $this->payment_url;
    }

    /**
     * The URL to redirect the user to (or submit the form to)
     *
     * Generated from protobuf field <code>string payment_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_url = $var;

        return $this;
    }

    /**
     * The form data to submit to the payment gateway (if type is form)
     *
     * Generated from protobuf field <code>map<string, string> data = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The form data to submit to the payment gateway (if type is form)
     *
     * Generated from protobuf field <code>map<string, string> data = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->data = $arr;

        return $this;
    }

}

