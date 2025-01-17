<?php

namespace App\Domain\Mapper;

use Barsam\Wallet\Messages\CreateRequest;

class WalletCreateMapper
{
    public static function fromRequest(array $inputs): CreateRequest
    {
        return new CreateRequest([
           'owner_id' => $inputs['owner_id'],
           'currency_id' => $inputs['currency_id'],
           'type' => $inputs['type']
        ]);
    }
}
