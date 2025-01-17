<?php

namespace App\Domain\Mapper;

use Barsam\Ticket\Messages\ReplyRequest;

class TicketReplyMapper
{
    public static function fromRequest(array $inputs): ReplyRequest
    {
        return new ReplyRequest([
            'ticket_id' => $inputs['ticket_id'],
            'user_id' => $inputs['user_id'],
            'body' => $inputs['body'],
            'files' => $inputs['files'],
            'is_admin' => $inputs['is_admin']
        ]);

    }

}
