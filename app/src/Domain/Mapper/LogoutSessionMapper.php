<?php

namespace App\Domain\Mapper;

use Barsam\Auth\Messages\LogoutSessionRequest;

class LogoutSessionMapper
{
    public static function fromRequest(array $inputs): LogoutSessionRequest
    {
        return new LogoutSessionRequest([

        ]);
    }

}
