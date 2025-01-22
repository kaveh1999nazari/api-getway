<?php

namespace App\Domain\Mapper\Backup;

use Barsam\User\Messages\FieldGetRequest;

class FieldGetMapper
{

    public static function fromRequest(array $inputs): FieldGetRequest
    {
        return new FieldGetRequest([
            'id' => $inputs['id'] ?? 0,
            'page' => $inputs['page'] ?? 0,
            'per_page' => $inputs['per_page'] ?? 0,
        ]);
    }
}
