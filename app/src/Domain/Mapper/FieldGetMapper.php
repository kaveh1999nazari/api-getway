<?php

namespace App\Domain\Mapper;

use Barsam\User\Messages\FieldGetRequest;
use Psr\Http\Message\ServerRequestInterface;

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
