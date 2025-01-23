<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: loan/messages/update.proto

namespace GPBMetadata\Loan\Messages;

class Update
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Loan\Enums\Status::initOnce();
        \GPBMetadata\Loan\Enums\StatusOne::initOnce();
        \GPBMetadata\Loan\Enums\StatusTow::initOnce();
        \GPBMetadata\Loan\Enums\StatusThree::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
loan/messages/update.protobarsam.loan.messagesloan/enums/status.protoloan/enums/status_one.protoloan/enums/status_tow.protoloan/enums/status_three.proto"�
UpdateRequest

id (
selected_amount (	
selected_duration (
installment_amount (	
infrastructure_amount (	
prepayment_amount (	
total_prepayment_amount (	
total_user_payment (	
credit_remaining	 (	.

granted_at
 (2.google.protobuf.Timestamp"
refund_bank_account_number (	
guaranteeType (	)
status (2.barsam.loan.enums.Status0

status_one (2.barsam.loan.enums.StatusOne0

status_tow (2.barsam.loan.enums.StatusTow4
status_three (2.barsam.loan.enums.StatusThree
is_approved_by_admin (
guaranteeFile (	"
UpdateResponsebproto3'
        , true);

        static::$is_initialized = true;
    }
}

