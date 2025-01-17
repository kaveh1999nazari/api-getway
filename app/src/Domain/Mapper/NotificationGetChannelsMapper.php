<?php

namespace App\Domain\Mapper;

use Barsam\Notification\Messages\GetChannelsRequest;

class NotificationGetChannelsMapper
{

    public static function fromRequest(array $inputs): GetChannelsRequest
    {
        return new GetChannelsRequest();
    }

}
