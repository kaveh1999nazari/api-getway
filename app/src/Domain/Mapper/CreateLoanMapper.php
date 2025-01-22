<?php

namespace App\Domain\Mapper;

use Barsam\Loan\Messages\CreateRequest;
use Google\Protobuf\Timestamp;

class CreateLoanMapper
{
    public static function fromRequest(array $inputs, int $userId): CreateRequest
    {
        return new CreateRequest([
            'user_id' => $userId,
            'plan_id' => $inputs['plan_id'],
            'selected_amount' => $inputs['selected_amount'],
            'selected_duration' => $inputs['selected_duration'],
        ]);
    }
}
