<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Cpg\Messages\UpdateRequest;

class CpgUpdateMapper
{
    public static function fromRequest(array $inputs): UpdateRequest
    {
        return new UpdateRequest([
            'id' => $inputs['id'],
            'amount' => $inputs['amount'],
            'mobile' => $inputs['mobile'],
            'national_code' => $inputs['national_code'],
            'description' => $inputs['description'],
            'callback_url' => $inputs['callback_url'],
            'code' => $inputs['code'],
            'shope_id' => $inputs['shope_id'],
        ]);
    }
}
