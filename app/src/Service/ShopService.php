<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Shop\Messages\CreateRequest;
use Barsam\Shop\Messages\DeleteRequest;
use Barsam\Shop\Messages\GetRequest;
use Barsam\Shop\Messages\UpdateRequest;
use Barsam\Shop\ShopServiceInterface;
use GPBMetadata\Cpg\Messages\Create;

/**
 * @method Create(CreateRequest $request, string $responseClass, array $context = [])
 * @method Update(UpdateRequest $request, string $responseClass, array $context = [])
 * @method Delete(DeleteRequest $request, string $responseClass, array $context = [])
 * @method Get(GetRequest $request, string $responseClass, array $context = [])
 */
class ShopService extends AbstractClient
{
    public function getServiceInterface(): string
    {
        return ShopServiceInterface::class;
    }
}
