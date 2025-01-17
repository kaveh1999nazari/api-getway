<?php

namespace App\Domain\Mapper;

use Barsam\Ticket\Messages\DeleteRequest;

class TicketDeleteMapper
{
    public static function fromRequest(array $inputs): DeleteRequest
    {
        return new DeleteRequest([
            'id' => $inputs['id']
        ]);
    }

}
