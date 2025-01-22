<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Wallet\Messages\DepositRequest;

class WalletDepositMapper
{
    public static function fromRequest(array $inputs): DepositRequest
    {
        return new DepositRequest([
            'wallet_id' => $inputs['wallet_id'],
            'amount' => $inputs['amount'],
            'description' => $inputs['description'],
            'caused_by_id' => $inputs['caused_by_id'],
            'caused_by_name' => $inputs['caused_by_name']
        ]);
    }
}
