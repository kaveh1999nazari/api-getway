<?php

namespace App\Domain\Mapper;

use Barsam\Installment\Messages\GetAllRequest;

class GetAllInstallmentMapper
{
    public static function fromRequest(array $inputs): GetAllRequest
    {
        return new GetAllRequest([
            'user_id' => $inputs['user_id'],
            'loan_id' => $inputs['loan_id'],
            'number' => $inputs['number'],
            'page' => $inputs['page'],
            'per_page' => $inputs['per_page']
        ]);
    }
}
