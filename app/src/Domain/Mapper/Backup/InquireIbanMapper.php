<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Inquiry\Messages\InquireIbanRequest;

class InquireIbanMapper
{
    public static function fromRequest(array $inputs): InquireIbanRequest
    {
        return new InquireIbanRequest([
            'iban' => $inputs['iban'],
            'national_id' => $inputs['national_id'],
            'type' => $inputs['type'],
            'use_cache' => $inputs['use_cache']
        ]);
    }

}
