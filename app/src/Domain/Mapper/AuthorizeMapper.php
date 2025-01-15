<?php

namespace App\Domain\Mapper;

use Barsam\Auth\Messages\AuthorizeRequest;

class AuthorizeMapper
{
    public static function fromRequest(array $inputs): AuthorizeRequest
    {
        return new AuthorizeRequest([
            'client_id' => $inputs['client_id'],
            'state' => $inputs['state'],
            'redirect_uri' => $inputs['redirect_uri'],
            'response_type' => $inputs['response_type'],
            'scope' => $inputs['scope'],
            'user_id' => $inputs['user_id'],
        ]);
    }

}
