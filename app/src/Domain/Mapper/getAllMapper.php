<?php

namespace App\Domain\Mapper;

use Barsam\Config\Messages\GetAllRequest;

class getAllMapper
{
    public static function fromRequest(array $inputs): GetAllRequest
    {
        return new GetAllRequest([
            'service_name' => $inputs['service_name'],
        ]);
    }

}
