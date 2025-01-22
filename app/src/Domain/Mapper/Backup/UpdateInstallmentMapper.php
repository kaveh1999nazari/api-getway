<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Installment\Messages\UpdateRequest;

class UpdateInstallmentMapper
{
    public static function fromRequest(array $inputs): UpdateRequest
    {
        return new UpdateRequest([
            'id' => $inputs['id'],
            'number' => $inputs['number'],
            'amount' => $inputs['amount'],
            'penalty_amount' => $inputs['penalty_amount'],
            'due_date' => $inputs['due_date']
        ]);
    }

}
