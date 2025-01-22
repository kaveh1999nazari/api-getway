<?php

namespace App\Domain\Mapper;

use Barsam\Shop\Messages\CreateRequest;

class CreateShopMapper
{
    public static function fromRequest(array $inputs): CreateRequest
    {
        return new CreateRequest([
            'user_id' => $inputs['user_id'],
            'parent_id' => $inputs['parent_id'],
            'name' => $inputs['name'],
            'address' => $inputs['address'],
            'phone' => $inputs['phone'],
            'api_key' => $inputs['api_key'],
            'website' => $inputs['website'],
            'VAT_percent' => $inputs['VAT_percent'],
            'commercial_fee_percent' => $inputs['commercial_fee_percent'],
        ]);
    }

}
