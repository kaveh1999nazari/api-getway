<?php

namespace App\Domain\Mapper;

use Barsam\Payment\Messages\VerifyRequest;

class PaymentVerifyMapper
{
    public static function fromRequest(array $inputs): VerifyRequest
    {
        return new VerifyRequest([
            'transaction_id' => $inputs['transaction_id'],
            'reference_id' => $inputs['reference_id'],
            'additional_data' => $inputs['additional_data'],
        ]);
    }
}
