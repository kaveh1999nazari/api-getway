<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Inquiry\Messages\FinishCreditScoreRequest;

class FinishCreditScoreMapper
{
    public static function fromRequest(array $inputs): FinishCreditScoreRequest
    {
        return new FinishCreditScoreRequest([
            'request_id' => $inputs['request_id'],
            'code' => $inputs['code']
        ]);
    }
}
