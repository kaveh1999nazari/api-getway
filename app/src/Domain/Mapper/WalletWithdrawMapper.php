<?php

namespace App\Domain\Mapper;

use Barsam\Wallet\Messages\WithdrawRequest;

class WalletWithdrawMapper
{
    public static function fromRequest(array $inputs): WithdrawRequest
    {
        return new WithdrawRequest([
            'wallet_id' => $inputs['wallet_id'],
            'amount' => $inputs['amount'],
            'description' => $inputs['description'],
            'caused_by_id' => $inputs['caused_by_id'],
            'caused_by_name' => $inputs['caused_by_name']
        ]);
    }
}
