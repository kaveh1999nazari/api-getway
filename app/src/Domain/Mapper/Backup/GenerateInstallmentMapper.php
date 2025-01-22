<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Installment\Messages\GenerateRequest;

class GenerateInstallmentMapper
{
    public static function fromRequest(array $inputs): GenerateRequest
    {
        return new GenerateRequest([
            'loan_id' => $inputs['loan_id'],
            'user_id' => $inputs['user_id'],
            'payback_period' => $inputs['payback_period'],
            'amount' => $inputs['amount'],
            'start_from' => $inputs['start_from']
        ]);
    }
}
