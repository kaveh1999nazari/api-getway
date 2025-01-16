<?php

namespace App\Domain\Mapper;

use Barsam\Inquiry\Messages\StartCreditScoreRequest;

class StartCreditScoreMapper
{
    public static function fromRequest(array $inputs): StartCreditScoreRequest
    {
        return new StartCreditScoreRequest([
            'national_id' => $inputs['national_id'],
            'mobile' => $inputs['mobile']
        ]);
    }

}
