<?php

namespace App\Domain\Mapper;

use Barsam\Installment\Messages\DeleteRequest;

class DeleteInstallmentMapper
{
    public static function fromRequest(array $inputs): DeleteRequest
    {
        return new DeleteRequest([
            'id' => $inputs['id']
        ]);
    }
}
