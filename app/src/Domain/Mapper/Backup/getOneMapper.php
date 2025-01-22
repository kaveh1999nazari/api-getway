<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Config\Messages\GetOneRequest;

class getOneMapper
{
    public static function fromRequest(array $inputs): GetOneRequest
    {
        return new GetOneRequest([
            'service_name' => $inputs['service_name'],
            'key' => $inputs['key'],
        ]);
    }
}
