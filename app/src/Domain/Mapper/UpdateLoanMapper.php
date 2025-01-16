<?php

namespace App\Domain\Mapper;

use Barsam\Loan\Messages\UpdateRequest;

class UpdateLoanMapper
{
    public static function fromRequest(array $inputs): UpdateRequest
    {
        return new UpdateRequest([
            'id' => $inputs['id'],
            'selected_amount' => $inputs['selected_amount'],
            'selected_duration' => $inputs['selected_duration'],
            'installment_amount' => $inputs['installment_amount'],
            'infrastructure_amount' => $inputs['infrastructure_amount'],
            'prepayment_amount' => $inputs['prepayment_amount'],
            'total_prepayment_amount' => $inputs['total_prepayment_amount'],
            'total_user_payment' => $inputs['total_user_payment'],
            'credit_remaining' => $inputs['credit_remaining'],
            'granted_at' => $inputs['granted_at'],
            'refund_bank_account_number' => $inputs['refund_bank_account_number'],
        ]);
    }

}
