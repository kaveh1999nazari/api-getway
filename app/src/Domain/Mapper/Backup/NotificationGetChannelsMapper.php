<?php

namespace App\Domain\Mapper\Backup;

use Barsam\Notification\Messages\GetChannelsRequest;

class NotificationGetChannelsMapper
{

    public static function fromRequest(array $inputs): GetChannelsRequest
    {
        return new GetChannelsRequest([
            'id' => $inputs['id'] ?? 0,
            'page' => $inputs['page'] ?? 0,
            'per_page' => $inputs['per_page'] ?? 0,
        ]);
    }

}
