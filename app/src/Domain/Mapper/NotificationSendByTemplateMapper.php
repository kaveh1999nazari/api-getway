<?php

namespace App\Domain\Mapper;

use Barsam\Notification\Messages\SendByTemplateRequest;

class NotificationSendByTemplateMapper
{
    public static function fromRequest(array $inputs): SendByTemplateRequest
    {
        return new SendByTemplateRequest([
            'channel_id' => $inputs['channel_id'],
            'template' => $inputs['template'],
            'recipient' => $inputs['recipient'],
            'data' => $inputs['data']
        ]);
    }
}
