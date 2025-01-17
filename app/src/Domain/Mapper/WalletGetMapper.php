<?php

namespace App\Domain\Mapper;

use Barsam\Wallet\Messages\GetRequest;

class WalletGetMapper
{
    public static function fromRequest(array $inputs): GetRequest
    {
        return new GetRequest([
            'id' => $inputs['id'],
            'address' => $inputs['address']
        ]);
    }
}
