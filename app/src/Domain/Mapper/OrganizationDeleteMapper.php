<?php

namespace App\Domain\Mapper;

use Barsam\Organization\Messages\DeleteRequest;

class OrganizationDeleteMapper
{
    public static function fromRequest(array $inputs): DeleteRequest
    {
        return new DeleteRequest([
            'id' => $inputs['id'],
        ]);
    }
}
