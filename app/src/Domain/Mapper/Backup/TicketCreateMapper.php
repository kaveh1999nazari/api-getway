<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Ticket\Messages\CreateRequest;

class TicketCreateMapper
{
    public static function fromRequest(array $inputs): CreateRequest
    {
        return new CreateRequest([
            'department_id' => $inputs['department_id'],
            'user_id' => $inputs['user_id'],
            'title' => $inputs['title'],
            'body' => $inputs['body'],
            'files' => $inputs['files']
        ]);
    }

}
