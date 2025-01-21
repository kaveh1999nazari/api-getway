<?php

namespace App\Domain\Mapper;

use Barsam\User\Messages\GetRequest;

class GetUserMapper
{
    public static function fromRequest(array $inputs): GetRequest
    {
        return new GetRequest([
            'id' => $inputs['id'] ?? 0,
//            'login_id' => $inputs['login_id'] ?? 0,
//            'page' => $inputs['page'] ?? 0,
//            'per_page' => $inputs['per_page'] ?? 0,
        ]);
    }

}
