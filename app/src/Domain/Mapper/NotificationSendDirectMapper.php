<?php

namespace App\Domain\Mapper;

use Barsam\Notification\Messages\SendDirectRequest;

class NotificationSendDirectMapper
{
    public static function fromRequest(array $inputs): SendDirectRequest
    {
        return new SendDirectRequest([
            'channel_id' => $inputs['channel_id'],
            'recipient' => $inputs['recipient'],
            'message' => $inputs['message'],
            'subject' => $inputs['subject']
        ]);
    }

}
