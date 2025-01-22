<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Loan\Messages\GetAllPlansRequest;

class GetAllPlanLoanMapper
{
    public static function fromRequest(array $inputs): GetAllPlansRequest
    {
        return new GetAllPlansRequest();
    }
}
