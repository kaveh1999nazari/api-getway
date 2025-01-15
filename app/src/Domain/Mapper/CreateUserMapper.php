<?php

namespace App\Domain\Mapper;

use Barsam\User\Messages\RegisterRequest;

class CreateUserMapper
{
    public static function fromRequest(array $inputs): RegisterRequest
    {
        return new RegisterRequest(
            [
                'login_id' => $inputs['login_id'],
                'password_raw' => $inputs['password_raw'],
                'meta_fields' => $inputs['meta_fields'],
            ]
        );
    }

}
