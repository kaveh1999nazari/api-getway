<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Notification\Messages\CreateTemplateRequest;
use Barsam\Notification\Messages\GetChannelsRequest;
use Barsam\Notification\Messages\GetTemplatesRequest;
use Barsam\Notification\Messages\SendByTemplateRequest;
use Barsam\Notification\Messages\SendDirectRequest;
use Barsam\Notification\Messages\UpdateTemplateRequest;
use Barsam\Notification\NotificationServiceInterface;


/**
 * @method GetChannels(GetChannelsRequest $request, string $responseClass, array $context = [])
 * @method SendDirect(SendDirectRequest $request, string $responseClass, array $context = [])
 * @method SendByTemplate(SendByTemplateRequest $request, string $responseClass, array $context = [])
 * @method GetTemplates(GetTemplatesRequest $request, string $responseClass, array $context = [])
 * @method CreateTemplate(CreateTemplateRequest $request, string $responseClass, array $context = [])
 * @method UpdateTemplate(UpdateTemplateRequest $request, string $responseClass, array $context = [])
 */
class NotificationService extends AbstractClient
{

    public function getServiceInterface(): string
    {
        return NotificationServiceInterface::class;
    }
}
