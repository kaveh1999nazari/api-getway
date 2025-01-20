<?php

namespace App\Domain\Mapper;

use Barsam\Organization\Messages\GetRequest;

class OrganizationGetMapper
{
    public static function fromRequest(array $inputs): GetRequest
    {
        return new GetRequest([
            'id' => $inputs['id'],
            'page' => $inputs['page'],
            'per_page' => $inputs['per_page'],
        ]);
    }
}
