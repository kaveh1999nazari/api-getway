<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Otp\Messages\GenerateRequest;

class OtpGenerateMapper
{
    public static function fromRequest(array $inputs): GenerateRequest
    {
        return new GenerateRequest([
            'identifier' => $inputs['identifier'],
            'expire_seconds' => $inputs['expire_seconds'],
            'expire_latest' => $inputs['expire_latest'],
            'channel' => $inputs[ 'channel'],
        ]);
    }
}
