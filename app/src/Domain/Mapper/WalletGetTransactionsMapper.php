<?php

namespace App\Domain\Mapper;

use Barsam\Wallet\Messages\GetTransactionsRequest;

class WalletGetTransactionsMapper
{
    public static function fromRequest(array $inputs): GetTransactionsRequest
    {
        return new GetTransactionsRequest([
            'wallet_id' => $inputs['wallet_id'],
            'address' => $inputs['address'],
            'type' => $inputs['type'],
            'status' => $inputs['status'],
            'from' => $inputs['from'],
            'to' => $inputs['to'],
            'caused_by_name' => $inputs['caused_by_name'],
            'page' => $inputs['page'],
            'per_page' => $inputs['per_page']
        ]);
    }

}
