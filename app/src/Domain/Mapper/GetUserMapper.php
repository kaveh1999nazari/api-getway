<?php

namespace App\Domain\Mapper;

use Barsam\User\Messages\GetRequest;

class GetUserMapper
{
    public static function fromRequest(array $inputs): GetRequest
    {
        return new GetRequest([
            'id' => $inputs['id'],
            'login_id' => $inputs['login_id'],
            'page' => $inputs['page'],
            'per_page' => $inputs['per_page'],
        ]);
    }

}
