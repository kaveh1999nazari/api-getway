<?php

namespace App\Domain\Mapper;

use Barsam\Cpg\Messages\CreateRequest;

class CreateCpgMapper
{
    public static function fromRequest(array $inputs): CreateRequest
    {
        return new CreateRequest([
            'amount' => $inputs['amount'],
            'mobile' => $inputs['mobile'],
            'national_code' => $inputs['national_code'],
            'description' => $inputs['description'],
            'callback_url' => $inputs['callback_url'],
            'code' => $inputs['code'],
            'shope_id' => $inputs['shope_id'],
            'expired_at' => $inputs['expired_at'],
            'items' => $inputs['items'],
        ]);
    }
}
