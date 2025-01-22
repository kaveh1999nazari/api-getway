<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Cpg\Messages\DeleteRequest;

class CpgDeleteMapper
{
    public static function fromRequest(array $inputs): DeleteRequest
    {
        return new DeleteRequest([
            'id ' => $inputs['id '],
        ]);
    }
}
