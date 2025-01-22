<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wallet/messages/withdraw.proto

namespace Barsam\Wallet\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the request message
 *
 * Generated from protobuf message <code>barsam.wallet.messages.WithdrawRequest</code>
 */
class WithdrawRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 wallet_id = 1;</code>
     */
    protected $wallet_id = 0;
    /**
     * Generated from protobuf field <code>string amount = 2;</code>
     */
    protected $amount = '';
    /**
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>uint64 caused_by_id = 4;</code>
     */
    protected $caused_by_id = 0;
    /**
     * Generated from protobuf field <code>string caused_by_name = 5;</code>
     */
    protected $caused_by_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $wallet_id
     *     @type string $amount
     *     @type string $description
     *     @type int|string $caused_by_id
     *     @type string $caused_by_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Wallet\Messages\Withdraw::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 wallet_id = 1;</code>
     * @return int|string
     */
    public function getWalletId()
    {
        return $this->wallet_id;
    }

    /**
     * Generated from protobuf field <code>uint64 wallet_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWalletId($var)
    {
        GPBUtil::checkUint64($var);
        $this->wallet_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string amount = 2;</code>
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>string amount = 2;</code>
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
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
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
     * Generated from protobuf field <code>uint64 caused_by_id = 4;</code>
     * @return int|string
     */
    public function getCausedById()
    {
        return $this->caused_by_id;
    }

    /**
     * Generated from protobuf field <code>uint64 caused_by_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCausedById($var)
    {
        GPBUtil::checkUint64($var);
        $this->caused_by_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string caused_by_name = 5;</code>
     * @return string
     */
    public function getCausedByName()
    {
        return $this->caused_by_name;
    }

    /**
     * Generated from protobuf field <code>string caused_by_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCausedByName($var)
    {
        GPBUtil::checkString($var, True);
        $this->caused_by_name = $var;

        return $this;
    }

}

