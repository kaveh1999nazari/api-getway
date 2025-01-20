<?php

namespace App\Domain\Mapper;

use Barsam\Organization\Messages\AddUserRequest;

class OrganizationAddUserMapper
{
    public static function fromRequest(array $inputs): AddUserRequest
    {
        return new AddUserRequest([
            'organization_id' => $inputs['organization_id'],
            'user_id' => $inputs['user_id'],
        ]);
    }
}
