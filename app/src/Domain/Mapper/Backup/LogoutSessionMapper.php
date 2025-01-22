<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Auth\Messages\LogoutSessionRequest;

class LogoutSessionMapper
{
    public static function fromRequest(array $inputs): LogoutSessionRequest
    {
        return new LogoutSessionRequest([

        ]);
    }

}
