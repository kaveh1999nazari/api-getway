<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: installment/messages/create.proto

namespace Barsam\Installment\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the request message
 *
 * Generated from protobuf message <code>barsam.installment.messages.CreateRequest</code>
 */
class CreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>uint64 loan_id = 3;</code>
     */
    protected $loan_id = 0;
    /**
     * Generated from protobuf field <code>uint32 number = 4;</code>
     */
    protected $number = 0;
    /**
     * Generated from protobuf field <code>string amount = 5;</code>
     */
    protected $amount = '';
    /**
     * Generated from protobuf field <code>string penalty_amount = 6;</code>
     */
    protected $penalty_amount = '';
    /**
     * Generated from protobuf field <code>string due_date = 7;</code>
     */
    protected $due_date = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $user_id
     *     @type int|string $loan_id
     *     @type int $number
     *     @type string $amount
     *     @type string $penalty_amount
     *     @type string $due_date
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Installment\Messages\Create::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
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
     * Generated from protobuf field <code>uint64 loan_id = 3;</code>
     * @return int|string
     */
    public function getLoanId()
    {
        return $this->loan_id;
    }

    /**
     * Generated from protobuf field <code>uint64 loan_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLoanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->loan_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 number = 4;</code>
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Generated from protobuf field <code>uint32 number = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string amount = 5;</code>
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>string amount = 5;</code>
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
     * Generated from protobuf field <code>string penalty_amount = 6;</code>
     * @return string
     */
    public function getPenaltyAmount()
    {
        return $this->penalty_amount;
    }

    /**
     * Generated from protobuf field <code>string penalty_amount = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPenaltyAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->penalty_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string due_date = 7;</code>
     * @return string
     */
    public function getDueDate()
    {
        return $this->due_date;
    }

    /**
     * Generated from protobuf field <code>string due_date = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDueDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->due_date = $var;

        return $this;
    }

}

