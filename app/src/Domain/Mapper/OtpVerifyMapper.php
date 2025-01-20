<?php

namespace App\Domain\Mapper;

use Barsam\Otp\Messages\VerifyRequest;

class OtpVerifyMapper
{
    public static function fromRequest(array $inputs): VerifyRequest
    {
        return new VerifyRequest([
            'identifier' => $inputs['identifier'],
            'code' => $inputs['code'],
            'channel' => $inputs['channel'],
        ]);
    }
}
