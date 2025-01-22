<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Ticket\Messages\GetRequest;

class TicketGetMapper
{
    public static function fromRequest(array $inputs): GetRequest
    {
        return new GetRequest([
            'id' => $inputs['id']
        ]);
    }

}
