<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: loan/models/loan.proto

namespace Barsam\Loan\Models;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>barsam.loan.models.Loan</code>
 */
class Loan extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>uint64 user_id = 2;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>uint64 plan_id = 3;</code>
     */
    protected $plan_id = 0;
    /**
     * Generated from protobuf field <code>string selected_amount = 4;</code>
     */
    protected $selected_amount = '';
    /**
     * Generated from protobuf field <code>uint32 selected_duration = 5;</code>
     */
    protected $selected_duration = 0;
    /**
     * Generated from protobuf field <code>string installment_amount = 6;</code>
     */
    protected $installment_amount = '';
    /**
     * Generated from protobuf field <code>string infrastructure_amount = 7;</code>
     */
    protected $infrastructure_amount = '';
    /**
     * Generated from protobuf field <code>string prepayment_amount = 8;</code>
     */
    protected $prepayment_amount = '';
    /**
     * Generated from protobuf field <code>string total_prepayment_amount = 9;</code>
     */
    protected $total_prepayment_amount = '';
    /**
     * Generated from protobuf field <code>string total_user_payment = 10;</code>
     */
    protected $total_user_payment = '';
    /**
     * Generated from protobuf field <code>string credit_remaining = 11;</code>
     */
    protected $credit_remaining = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp granted_at = 12;</code>
     */
    protected $granted_at = null;
    /**
     * Generated from protobuf field <code>string refund_bank_account_number = 13;</code>
     */
    protected $refund_bank_account_number = '';
    /**
     * Generated from protobuf field <code>string guaranteeType = 14;</code>
     */
    protected $guaranteeType = '';
    /**
     * Generated from protobuf field <code>.barsam.loan.enums.Status status = 15;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>.barsam.loan.enums.StatusOne status_one = 16;</code>
     */
    protected $status_one = 0;
    /**
     * Generated from protobuf field <code>.barsam.loan.enums.StatusTow status_tow = 17;</code>
     */
    protected $status_tow = 0;
    /**
     * Generated from protobuf field <code>.barsam.loan.enums.StatusThree status_three = 18;</code>
     */
    protected $status_three = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 19;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 20;</code>
     */
    protected $updated_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp deleted_at = 21;</code>
     */
    protected $deleted_at = null;
    /**
     * Generated from protobuf field <code>bool is_approved_by_admin = 22;</code>
     */
    protected $is_approved_by_admin = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type int|string $user_id
     *     @type int|string $plan_id
     *     @type string $selected_amount
     *     @type int $selected_duration
     *     @type string $installment_amount
     *     @type string $infrastructure_amount
     *     @type string $prepayment_amount
     *     @type string $total_prepayment_amount
     *     @type string $total_user_payment
     *     @type string $credit_remaining
     *     @type \Google\Protobuf\Timestamp $granted_at
     *     @type string $refund_bank_account_number
     *     @type string $guaranteeType
     *     @type int $status
     *     @type int $status_one
     *     @type int $status_tow
     *     @type int $status_three
     *     @type \Google\Protobuf\Timestamp $created_at
     *     @type \Google\Protobuf\Timestamp $updated_at
     *     @type \Google\Protobuf\Timestamp $deleted_at
     *     @type bool $is_approved_by_admin
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Loan\Models\Loan::initOnce();
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
     * Generated from protobuf field <code>uint64 user_id = 2;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
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
     * Generated from protobuf field <code>uint64 plan_id = 3;</code>
     * @return int|string
     */
    public function getPlanId()
    {
        return $this->plan_id;
    }

    /**
     * Generated from protobuf field <code>uint64 plan_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPlanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->plan_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string selected_amount = 4;</code>
     * @return string
     */
    public function getSelectedAmount()
    {
        return $this->selected_amount;
    }

    /**
     * Generated from protobuf field <code>string selected_amount = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSelectedAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->selected_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 selected_duration = 5;</code>
     * @return int
     */
    public function getSelectedDuration()
    {
        return $this->selected_duration;
    }

    /**
     * Generated from protobuf field <code>uint32 selected_duration = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSelectedDuration($var)
    {
        GPBUtil::checkUint32($var);
        $this->selected_duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string installment_amount = 6;</code>
     * @return string
     */
    public function getInstallmentAmount()
    {
        return $this->installment_amount;
    }

    /**
     * Generated from protobuf field <code>string installment_amount = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setInstallmentAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->installment_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string infrastructure_amount = 7;</code>
     * @return string
     */
    public function getInfrastructureAmount()
    {
        return $this->infrastructure_amount;
    }

    /**
     * Generated from protobuf field <code>string infrastructure_amount = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setInfrastructureAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->infrastructure_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string prepayment_amount = 8;</code>
     * @return string
     */
    public function getPrepaymentAmount()
    {
        return $this->prepayment_amount;
    }

    /**
     * Generated from protobuf field <code>string prepayment_amount = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPrepaymentAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->prepayment_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string total_prepayment_amount = 9;</code>
     * @return string
     */
    public function getTotalPrepaymentAmount()
    {
        return $this->total_prepayment_amount;
    }

    /**
     * Generated from protobuf field <code>string total_prepayment_amount = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setTotalPrepaymentAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->total_prepayment_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string total_user_payment = 10;</code>
     * @return string
     */
    public function getTotalUserPayment()
    {
        return $this->total_user_payment;
    }

    /**
     * Generated from protobuf field <code>string total_user_payment = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setTotalUserPayment($var)
    {
        GPBUtil::checkString($var, True);
        $this->total_user_payment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string credit_remaining = 11;</code>
     * @return string
     */
    public function getCreditRemaining()
    {
        return $this->credit_remaining;
    }

    /**
     * Generated from protobuf field <code>string credit_remaining = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setCreditRemaining($var)
    {
        GPBUtil::checkString($var, True);
        $this->credit_remaining = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp granted_at = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getGrantedAt()
    {
        return $this->granted_at;
    }

    public function hasGrantedAt()
    {
        return isset($this->granted_at);
    }

    public function clearGrantedAt()
    {
        unset($this->granted_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp granted_at = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setGrantedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->granted_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string refund_bank_account_number = 13;</code>
     * @return string
     */
    public function getRefundBankAccountNumber()
    {
        return $this->refund_bank_account_number;
    }

    /**
     * Generated from protobuf field <code>string refund_bank_account_number = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setRefundBankAccountNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->refund_bank_account_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string guaranteeType = 14;</code>
     * @return string
     */
    public function getGuaranteeType()
    {
        return $this->guaranteeType;
    }

    /**
     * Generated from protobuf field <code>string guaranteeType = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setGuaranteeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->guaranteeType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.barsam.loan.enums.Status status = 15;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.barsam.loan.enums.Status status = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Barsam\Loan\Enums\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.barsam.loan.enums.StatusOne status_one = 16;</code>
     * @return int
     */
    public function getStatusOne()
    {
        return $this->status_one;
    }

    /**
     * Generated from protobuf field <code>.barsam.loan.enums.StatusOne status_one = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setStatusOne($var)
    {
        GPBUtil::checkEnum($var, \Barsam\Loan\Enums\StatusOne::class);
        $this->status_one = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.barsam.loan.enums.StatusTow status_tow = 17;</code>
     * @return int
     */
    public function getStatusTow()
    {
        return $this->status_tow;
    }

    /**
     * Generated from protobuf field <code>.barsam.loan.enums.StatusTow status_tow = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setStatusTow($var)
    {
        GPBUtil::checkEnum($var, \Barsam\Loan\Enums\StatusTow::class);
        $this->status_tow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.barsam.loan.enums.StatusThree status_three = 18;</code>
     * @return int
     */
    public function getStatusThree()
    {
        return $this->status_three;
    }

    /**
     * Generated from protobuf field <code>.barsam.loan.enums.StatusThree status_three = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setStatusThree($var)
    {
        GPBUtil::checkEnum($var, \Barsam\Loan\Enums\StatusThree::class);
        $this->status_three = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 19;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 19;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 20;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function hasUpdatedAt()
    {
        return isset($this->updated_at);
    }

    public function clearUpdatedAt()
    {
        unset($this->updated_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 20;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp deleted_at = 21;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    public function hasDeletedAt()
    {
        return isset($this->deleted_at);
    }

    public function clearDeletedAt()
    {
        unset($this->deleted_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp deleted_at = 21;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeletedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->deleted_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_approved_by_admin = 22;</code>
     * @return bool
     */
    public function getIsApprovedByAdmin()
    {
        return $this->is_approved_by_admin;
    }

    /**
     * Generated from protobuf field <code>bool is_approved_by_admin = 22;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsApprovedByAdmin($var)
    {
        GPBUtil::checkBool($var);
        $this->is_approved_by_admin = $var;

        return $this;
    }

}

