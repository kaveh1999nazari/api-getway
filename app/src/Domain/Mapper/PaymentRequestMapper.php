<?php

namespace App\Domain\Mapper;

use Barsam\Payment\Messages\RequestRequest;

class PaymentRequestMapper
{
    public static function fromRequest(array $inputs): RequestRequest
    {
        return new RequestRequest([
            'transaction_id' => $inputs['transaction_id'],
            'user_id' => $inputs['user_id'],
            'amount' => $inputs['amount'],
            'callback_url' => $inputs['callback_url'],
            'description' => $inputs['description'],
            'payer_mobile' => $inputs['payer_mobile'],
        ]);
    }
}
