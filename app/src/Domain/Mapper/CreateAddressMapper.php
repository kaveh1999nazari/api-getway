<?php

namespace App\Domain\Mapper;

use App\Facade\Auth;
use Barsam\Location\Messages\CreateRequest;

class CreateAddressMapper
{
    public static function fromRequest(array $inputs): CreateRequest
    {
        return new CreateRequest([
            'user_id' => Auth::user()->getId(),
            'city_id' => $inputs['city_id'],
            'address' => $inputs['address'],
            'postal_code' => $inputs['postal_code'],
            'phone_number' => $inputs['phone_number'],
        ]);
    }

}
