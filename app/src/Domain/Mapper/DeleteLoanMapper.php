<?php

namespace App\Domain\Mapper;

use Barsam\Loan\Messages\DeleteRequest;

class DeleteLoanMapper
{
    public static function fromRequest(array $inputs): DeleteRequest
    {
        return new DeleteRequest([
            'id' => $inputs['id']
        ]);
    }

}
