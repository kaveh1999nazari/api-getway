<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Loan\Messages\DeletePlanRequest;

class DeletePlanLoanMapper
{
    public static function fromRequest(array $inputs): DeletePlanRequest
    {
        return new DeletePlanRequest([
            'id' => $inputs['id']
        ]);
    }

}
