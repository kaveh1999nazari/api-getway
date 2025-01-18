<?php

namespace App\Domain\Mapper;

use Barsam\Notification\Messages\UpdateTemplateRequest;

class NotificationUpdateTemplateMapper
{
    public static function fromRequest(array $inputs): UpdateTemplateRequest
    {
        return new UpdateTemplateRequest([
            'id' => $inputs['id'],
            'key' => $inputs['key'],
            'subject' => $inputs['subject'],
            'content' => $inputs['content']
        ]);
    }
}
