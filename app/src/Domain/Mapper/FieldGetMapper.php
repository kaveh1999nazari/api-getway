<?php

namespace App\Domain\Mapper;

use Barsam\User\Messages\FieldGetAllRequest;
use Barsam\User\Messages\FieldGetRequest;
use Psr\Http\Message\ServerRequestInterface;

class FieldGetMapper
{

    public static function fromRequest(array $inputs): FieldGetRequest
    {
        return new FieldGetRequest([
            'id' => $inputs['id'],
            'page' => $inputs['page'],
            'per_page' => $inputs['per_page'],
        ]);
    }
}
