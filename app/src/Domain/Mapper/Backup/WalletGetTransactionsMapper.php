<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Wallet\Messages\GetTransactionsRequest;

class WalletGetTransactionsMapper
{
    public static function fromRequest(array $inputs): GetTransactionsRequest
    {
        return new GetTransactionsRequest([
            'wallet_id' => $inputs['wallet_id'] ?? 0,
            'address' => $inputs['address'] ?? "",
            'type' => $inputs['type'] ?? -1,
            'status' => $inputs['status'] ?? -1,
            'from' => $inputs['from'] ?? null,
            'to' => $inputs['to'] ?? null,
            'caused_by_name' => $inputs['caused_by_name'] ?? "",
            'page' => $inputs['page'] ?? 0,
            'per_page' => $inputs['per_page'] ?? 0,
        ]);
    }

}
