<?php

namespace App\Domain\Mapper;

use Barsam\Installment\Messages\GetRequest;

class GetInstallmentMapper
{
    public static function fromRequest(array $inputs): GetRequest
    {
        return new GetRequest([
            'id' => $inputs['id']
        ]);
    }
}
