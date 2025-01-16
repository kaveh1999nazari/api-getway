<?php

namespace App\Domain\Mapper;

use Barsam\Loan\Messages\CreatePlanRequest;

class CreatePlanLoanMapper
{
    public static function fromRequest(array $inputs): CreatePlanRequest
    {
        return new CreatePlanRequest([
            'title' => $inputs['title'],
            'max_amount' => $inputs['max_amount'],
            'min_amount' => $inputs['min_amount'],
            'interest_rate' => $inputs['interest_rate'],
            'infrastructure_rate' => $inputs['infrastructure_rate'],
            'prepayment_rate' => $inputs['prepayment_rate'],
            'available_durations' => $inputs['available_durations'],
            'description' => $inputs['description']
        ]);
    }

}
