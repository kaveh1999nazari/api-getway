<?php

namespace App\Domain\Mapper;

use Barsam\Organization\Messages\UpdateRequest;

class OrganizationUpdateMapper
{
    public static function fromRequest(array $inputs): UpdateRequest
    {
        return new UpdateRequest([
            'id' => $inputs['id'],
            'name' => $inputs['name'],
            'address' => $inputs['address'],
            'email' => $inputs['email'],
            'phone' => $inputs['phone'],
            'city' => $inputs['city'],
            'website' => $inputs['website'],
        ]);
    }
}
