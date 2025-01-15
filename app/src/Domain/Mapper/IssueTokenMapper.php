<?php

namespace App\Domain\Mapper;

use Barsam\Auth\Messages\IssueTokenRequest;

class IssueTokenMapper
{
    public static function fromRequest(array $inputs): IssueTokenRequest
    {
        return new IssueTokenRequest([

        ]);
    }

}
