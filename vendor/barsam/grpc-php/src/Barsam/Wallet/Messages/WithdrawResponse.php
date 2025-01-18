<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wallet/messages/withdraw.proto

namespace Barsam\Wallet\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the response message
 *
 * Generated from protobuf message <code>barsam.wallet.messages.WithdrawResponse</code>
 */
class WithdrawResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>double new_balance = 2;</code>
     */
    protected $new_balance = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $new_balance
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Wallet\Messages\Withdraw::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>double new_balance = 2;</code>
     * @return float
     */
    public function getNewBalance()
    {
        return $this->new_balance;
    }

    /**
     * Generated from protobuf field <code>double new_balance = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setNewBalance($var)
    {
        GPBUtil::checkDouble($var);
        $this->new_balance = $var;

        return $this;
    }

}

