<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Inquiry\Messages\InquireCardRequest;

class InquireCardMapper
{
    public static function fromRequest(array $inputs): InquireCardRequest
    {
        return new InquireCardRequest([
            'card_number' => $inputs['card_number'],
            'national_id' => $inputs['national_id'],
            'type' => $inputs['type'],
            'use_cache' => $inputs['use_cache']
        ]);
    }

}
