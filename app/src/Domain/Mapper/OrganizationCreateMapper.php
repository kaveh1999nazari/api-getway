<?php

namespace App\Domain\Mapper;

use Barsam\Organization\Messages\CreateRequest;

class OrganizationCreateMapper
{
    public static function fromRequest(array $inputs): CreateRequest
    {
        return new CreateRequest([
            'name' => $inputs['name'],
            'address' => $inputs['address'],
            'email' => $inputs['email'],
            'phone' => $inputs['phone'],
            'city' => $inputs['city'],
            'website' => $inputs['website'],
        ]);
    }
}
