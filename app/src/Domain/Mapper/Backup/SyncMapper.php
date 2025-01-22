<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Config\Messages\SyncRequest;

class SyncMapper
{
    public static function fromRequest(array $inputs): SyncRequest
    {
        return new SyncRequest([
            'app' => $inputs['app'],
            'configs' => $inputs['configs'],
        ]);
    }

}
