<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Notification\Messages\CreateTemplateRequest;

class NotificationCreateTemplateMapper
{
    public static function fromRequest(array $inputs): CreateTemplateRequest
    {
        return new CreateTemplateRequest([
            'channel_id' => $inputs['channel_id'],
            'key' => $inputs['key'],
            'subject' => $inputs['subject'],
            'content' => $inputs['content'],
        ]);
    }
}
