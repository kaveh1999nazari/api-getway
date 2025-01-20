<?php

namespace App\Domain\Mapper;

use Barsam\Organization\Messages\HasUserRequest;

class OrganizationHasUserMapper
{
    public static function fromRequest(array $inputs): HasUserRequest
    {
        return new HasUserRequest([
            'organization_id' => $inputs['organization_id'],
            'user_id' => $inputs['user_id'],
        ]);
    }
}
