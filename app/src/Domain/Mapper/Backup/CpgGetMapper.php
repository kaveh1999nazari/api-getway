<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Cpg\Messages\GetRequest;

class CpgGetMapper
{
    public static function fromRequest(array $inputs): GetRequest
    {
        return new GetRequest([
            'id' => $inputs['id'],
            'page' => $inputs['page'],
            'per_page' => $inputs['per_page'],
        ]);
    }
}
