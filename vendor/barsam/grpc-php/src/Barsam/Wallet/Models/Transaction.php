<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wallet/models/transaction.proto

namespace Barsam\Wallet\Models;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>barsam.wallet.models.Transaction</code>
 */
class Transaction extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>uint64 wallet_id = 2;</code>
     */
    protected $wallet_id = 0;
    /**
     * Generated from protobuf field <code>.barsam.wallet.enums.TransactionType type = 3;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>double amount = 4;</code>
     */
    protected $amount = 0.0;
    /**
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>uint64 caused_by_id = 8;</code>
     */
    protected $caused_by_id = 0;
    /**
     * Generated from protobuf field <code>string caused_by_name = 9;</code>
     */
    protected $caused_by_name = '';
    /**
     * Generated from protobuf field <code>string reference_number = 10;</code>
     */
    protected $reference_number = '';
    /**
     * Generated from protobuf field <code>.barsam.wallet.enums.TransactionStatus status = 6;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 7;</code>
     */
    protected $created_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type int|string $wallet_id
     *     @type int $type
     *     @type float $amount
     *     @type string $description
     *     @type int|string $caused_by_id
     *     @type string $caused_by_name
     *     @type string $reference_number
     *     @type int $status
     *     @type \Google\Protobuf\Timestamp $created_at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Wallet\Models\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 wallet_id = 2;</code>
     * @return int|string
     */
    public function getWalletId()
    {
        return $this->wallet_id;
    }

    /**
     * Generated from protobuf field <code>uint64 wallet_id = 2;</code>
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
     * Generated from protobuf field <code>.barsam.wallet.enums.TransactionType type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.barsam.wallet.enums.TransactionType type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Barsam\Wallet\Enums\TransactionType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double amount = 4;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>double amount = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
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
     * Generated from protobuf field <code>uint64 caused_by_id = 8;</code>
     * @return int|string
     */
    public function getCausedById()
    {
        return $this->caused_by_id;
    }

    /**
     * Generated from protobuf field <code>uint64 caused_by_id = 8;</code>
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
     * Generated from protobuf field <code>string caused_by_name = 9;</code>
     * @return string
     */
    public function getCausedByName()
    {
        return $this->caused_by_name;
    }

    /**
     * Generated from protobuf field <code>string caused_by_name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCausedByName($var)
    {
        GPBUtil::checkString($var, True);
        $this->caused_by_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reference_number = 10;</code>
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->reference_number;
    }

    /**
     * Generated from protobuf field <code>string reference_number = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setReferenceNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.barsam.wallet.enums.TransactionStatus status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.barsam.wallet.enums.TransactionStatus status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Barsam\Wallet\Enums\TransactionStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

}

