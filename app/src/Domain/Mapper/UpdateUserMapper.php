<?php

namespace App\Domain\Mapper;

use Barsam\User\Messages\UpdateRequest;

class UpdateUserMapper
{
    public static function fromRequest(array $inputs)
    {
        return new UpdateRequest([
            'id' => $inputs['id'],
            'password_raw' => $inputs['password_raw'],
            'meta_fields' => $inputs['meta_fields'],
        ]);

    }

}
