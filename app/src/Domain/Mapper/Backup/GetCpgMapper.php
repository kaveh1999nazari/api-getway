<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Cpg\Messages\GetRequest;

class GetCpgMapper
{
    public static function fromRequest(array $inputs): GetRequest
    {
        return new GetRequest([
            'id' => $inputs['id'],
            'page' => $inputs['page'] ?? 1,
            'per_page' => $inputs['per_page'] ?? 10,
        ]);
    }
}
