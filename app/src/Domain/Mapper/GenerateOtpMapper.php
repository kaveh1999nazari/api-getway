<?php

namespace App\Domain\Mapper;

use Barsam\Auth\Messages\GenerateOtpRequest;

class GenerateOtpMapper
{
    public static function fromRequest(array $inputs): GenerateOtpRequest
    {
        return new GenerateOtpRequest([

        ]);
    }

}
