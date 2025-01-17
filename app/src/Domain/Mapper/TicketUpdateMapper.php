<?php

namespace App\Domain\Mapper;

use Barsam\Ticket\Messages\UpdateRequest;

class TicketUpdateMapper
{
    public static function fromRequest(array $inputs): UpdateRequest
    {
        return new UpdateRequest([
            'id' => $inputs['id'],
            'status' => $inputs['status'],
            'private_note' => $inputs['private_note'],
            'tags' => $inputs['tags']
        ]);

    }

}
