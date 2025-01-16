<?php

namespace App\Domain\Mapper;

use Barsam\Inquiry\Messages\FinishCreditScoreRequest;
use Barsam\Inquiry\Messages\InquireBankingScoreRequest;

class InquireCreditScoreMapper
{
    public static function fromRequest(array $inputs): InquireBankingScoreRequest
    {
        return new InquireBankingScoreRequest([
            'national_id' => $inputs['request_id'],
            'mobile' => $inputs['code'],
            'use_cache' => $inputs['use_cache']
        ]);
    }

}
