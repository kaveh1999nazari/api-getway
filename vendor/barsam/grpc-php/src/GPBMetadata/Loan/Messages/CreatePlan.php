<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: loan/messages/create_plan.proto

namespace GPBMetadata\Loan\Messages;

class CreatePlan
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
loan/messages/create_plan.protobarsam.loan.messages"�
CreatePlanRequest
title (	

max_amount (

min_amount (
interest_rate (
infrastructure_rate (
prepayment_rate (
available_durations (	
description (	" 
CreatePlanResponse

id (bproto3'
        , true);

        static::$is_initialized = true;
    }
}

