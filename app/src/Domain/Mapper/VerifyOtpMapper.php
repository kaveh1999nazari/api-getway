<?php

namespace App\Domain\Mapper;

use Barsam\Auth\Messages\VerifyOtpRequest;

class VerifyOtpMapper
{
    public static function fromRequest(array $inputs): VerifyOtpRequest
    {
        return new VerifyOtpRequest([

        ]);
    }

}
