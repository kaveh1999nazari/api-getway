<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Inquiry\Messages\InquirePersonRequest;

class InquirePersonMapper
{
    public static function fromRequest(array $inputs): InquirePersonRequest
    {
        return new InquirePersonRequest([
            'national_id' => $inputs['national_id'],
            'birth_date' => $inputs['birth_date'],
            'use_cache' => $inputs['use_cache']
        ]);
    }

}
