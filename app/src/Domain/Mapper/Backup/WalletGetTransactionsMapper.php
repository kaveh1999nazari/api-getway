<?php

namespace App\Domain\Mapper\Backup;

use App\Facade\Auth;
use Barsam\Wallet\Messages\GetTransactionsRequest;

class WalletGetTransactionsMapper
{
    public static function fromRequest(array $inputs): GetTransactionsRequest
    {
        return new GetTransactionsRequest([
            'user_id' => Auth::user()->getId(),
            'page' => $inputs['page'] ?? 1,
            'per_page' => $inputs['per_page'] ?? 10,
//            'caused_by_name' => $inputs['caused_by_name'] ?? "",
//            'to' => $inputs['to'] ?? null,
//            'from' => $inputs['from'] ?? null,
//            'status' => $inputs['status'] ?? -1,
//            'type' => $inputs['type'] ?? -1,
//            'address' => $inputs['address'] ?? "",
//            'wallet_id' => $inputs['wallet_id'] ?? 0,
        ]);
    }

}
