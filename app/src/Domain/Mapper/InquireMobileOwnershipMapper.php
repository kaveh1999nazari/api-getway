<?php

namespace App\Domain\Mapper;


use Barsam\Inquiry\Messages\InquireMobileOwnershipRequest;

class InquireMobileOwnershipMapper
{
    public static function fromRequest(array $inputs): InquireMobileOwnershipRequest
    {
        return new InquireMobileOwnershipRequest([
            'mobile' => $inputs['mobile'],
            'national_id' => $inputs['national_id'],
            'use_cache' => $inputs['use_cache']
        ]);
    }
}
