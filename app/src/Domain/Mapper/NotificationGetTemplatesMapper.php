<?php

namespace App\Domain\Mapper;

use Barsam\Notification\Messages\GetTemplatesRequest;

class NotificationGetTemplatesMapper
{
    public static function fromRequest(array $inputs): GetTemplatesRequest
    {
        return new GetTemplatesRequest([
            'channel_id' => $inputs['channel_id']
        ]);

    }

}
