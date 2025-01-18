<?php

namespace App\Domain\Mapper;

use Barsam\Loan\Messages\GetRequest;

class GetLoanMapper
{
    public static function fromRequest(array $inputs): GetRequest
    {
        return new GetRequest([
            'id' => $inputs['id'] ?? 0,
            'user_id' => $inputs['user_id'] ?? 0,
            'page' => $inputs['page'] ?? 0,
            'per_page' => $inputs['per_page'] ?? 0,
        ]);
    }

}
