<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Auth\Messages\GenerateOtpRequest;

class GenerateOtpMapper
{
    public static function fromRequest(array $inputs): GenerateOtpRequest
    {
        return new GenerateOtpRequest([

        ]);
    }

}
