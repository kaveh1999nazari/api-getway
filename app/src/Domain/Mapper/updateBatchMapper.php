<?php

namespace App\Domain\Mapper;

use Barsam\Config\Messages\UpdateBatchRequest;

class updateBatchMapper
{
    public static function fromRequest(array $inputs): UpdateBatchRequest
    {
        return new UpdateBatchRequest([
            'configs' => $inputs['configs'],
        ]);
    }
}
