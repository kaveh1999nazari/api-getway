<?php

namespace App\Endpoint\Web\backup;

use Barsam\Loan\Messages\GetPlanRequest;

class GetPlanLoanMapper
{
    public static function fromRequest(): GetPlanRequest
    {
        return new GetPlanRequest([
            'page' => $inputs['page'] ?? 1,
            'per_page' => $inputs['per_page'] ?? 10,
        ]);
    }
}
