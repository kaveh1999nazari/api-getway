<?php

namespace App\Domain\Mapper;

use App\Facade\Auth;
use Barsam\Installment\Messages\GetRequest;

class GetInstallmentMapper
{
    public static function fromRequest(array $inputs, int $id, int $userId): GetRequest
    {
        return new GetRequest([
            'user_id' => $userId,
            'loan_id' => $id,
//            'page' => $inputs['page'],
//            'per_page' => $inputs['per_page']
        ]);
    }
}
