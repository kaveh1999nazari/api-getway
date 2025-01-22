<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Loan\Messages\GetRequest;

class GetLoanMapper
{
    public static function fromRequest(array $inputs): GetRequest
    {
        return new GetRequest([
            'id' => $inputs['id'],
//            'user_id' => $inputs['user_id'],
        ]);
    }

}
