<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: loan/messages/update_plan.proto

namespace GPBMetadata\Loan\Messages;

class UpdatePlan
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
loan/messages/update_plan.protobarsam.loan.messages"�
UpdatePlanRequest

id (
title (	

max_amount (	

min_amount (	
interest_rate (
infrastructure_rate (
prepayment_rate (
available_durations (	
description	 (	"
UpdatePlanResponsebproto3'
        , true);

        static::$is_initialized = true;
    }
}

