<?php

namespace App\Domain\Mapper;

use Barsam\Organization\Messages\GetUsersRequest;

class OrganizationGetUsersMapper
{
    public static function fromRequest(array $inputs): GetUsersRequest
    {
        return new GetUsersRequest([
            'id' => $inputs['id'],
            'organization_id' => $inputs['organization_id'],
            'page' => $inputs['page'],
            'per_page' => $inputs['per_page'],
        ]);
    }
}
