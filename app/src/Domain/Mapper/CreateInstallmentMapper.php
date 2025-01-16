<?php

namespace App\Domain\Mapper;

use Barsam\Installment\Messages\CreateRequest;

class CreateInstallmentMapper
{
    public static function fromRequest(array $inputs): CreateRequest
    {
        return new CreateRequest([
            'user_id' => $inputs['user_id'],
            'loan_id' => $inputs['loan_id'],
            'number' => $inputs['number'],
            'amount' => $inputs['amount'],
            'penalty_amount' => $inputs['penalty_amount'],
            'due_date' => $inputs['due_date'],
        ]);
    }

}
