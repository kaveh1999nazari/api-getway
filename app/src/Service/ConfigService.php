<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Config\ConfigServiceInterface;
use Barsam\Config\Messages\GetOneRequest;
use Barsam\Config\Messages\SyncRequest;
use Barsam\Config\Messages\UpdateBatchRequest;
use Barsam\Config\Messages\GetAllRequest;

/**
 * @method Sync(SyncRequest $request, string $responseClass, array $context = [])
 * @method GetOne(GetOneRequest $request, string $responseClass, array $context = [])
 * @method GetAll(GetAllRequest $request, string $responseClass, array $context = [])
 * @method UpdateBatch(UpdateBatchRequest $request, string $responseClass, array $context = [])
 */
class ConfigService extends AbstractClient
{

    public function getServiceInterface(): string
    {
        return ConfigServiceInterface::class;
    }
}
