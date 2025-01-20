<?php

namespace App\Domain\Mapper;

use Barsam\Organization\Messages\RemoveUserRequest;

class OrganizationRemoveUserMapper
{
    public static function fromRequest(array $inputs): RemoveUserRequest
    {
        return new RemoveUserRequest([
            'id' => $inputs['id'],
        ]);
    }
}
