<?php

namespace App\Domain\Mapper;

use Barsam\User\Messages\FieldGetAllRequest;
use Psr\Http\Message\ServerRequestInterface;

class FieldGetAllMapper
{

    public static function fromRequest(array $inputs): FieldGetAllRequest
    {
        return new FieldGetAllRequest();
    }
}
