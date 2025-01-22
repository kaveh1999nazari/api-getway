<?php

namespace App\Endpoint\Web\backup;

use Barsam\Loan\Messages\GetPlanRequest;

class GetPlanLoanMapper
{
    public static function fromRequest(array $inputs): GetPlanRequest
    {
        return new GetPlanRequest([
            'id' => $inputs['id'],
            'page' => $inputs['page'] ?? 1,
            'per_page' => $inputs['per_page'] ?? 1,
        ]);
    }
}
