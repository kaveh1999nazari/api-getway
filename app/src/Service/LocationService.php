<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Location\LocationServiceInterface;
use Barsam\Location\Messages\CreateRequest;
use Barsam\Location\Messages\DeleteRequest;
use Barsam\Location\Messages\GetCityRequest;
use Barsam\Location\Messages\GetProvinceRequest;
use Barsam\Location\Messages\GetRequest;
use Barsam\Location\Messages\UpdateRequest;

/**
 * @method Create(CreateRequest $request, string $responseClass, array $context = [])
 * @method Get(GetRequest $request, string $responseClass, array $context = [])
 * @method Update(UpdateRequest $request, string $responseClass, array $context = [])
 * @method Delete(DeleteRequest $request, string $responseClass, array $context = [])
 * @method GetProvince(GetProvinceRequest $request, string $responseClass, array $context = [])
 * @method GetCity(GetCityRequest $request, string $responseClass, array $context = [])
 */
class LocationService extends AbstractClient
{
    public function getServiceInterface(): string
    {
        return LocationServiceInterface::class;
    }
}
