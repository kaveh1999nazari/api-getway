<?php

namespace App\Domain\Mapper;

use Barsam\User\Messages\FieldDeleteRequest;

class FieldDeleteMapper
{

    public static function fromRequest(array $inputs): FieldDeleteRequest
    {
        return new FieldDeleteRequest([
            'id' => $inputs['id'],
        ]);
    }

}
