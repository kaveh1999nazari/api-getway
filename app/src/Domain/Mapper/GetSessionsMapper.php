<?php

namespace App\Domain\Mapper;

use Barsam\Auth\Messages\GetSessionsRequest;

class GetSessionsMapper
{
    public static function fromRequest(array $inputs): GetSessionsRequest
    {
        return new GetSessionsRequest([

        ]);
    }

}
