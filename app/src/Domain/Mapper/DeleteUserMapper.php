<?php

namespace App\Domain\Mapper;

use Barsam\User\Messages\DeleteRequest;

class DeleteUserMapper
{
    public static function fromRequest(array $inputs): DeleteRequest
    {
        return new DeleteRequest([
            'id' => $inputs['id'],
        ]);

    }

}
