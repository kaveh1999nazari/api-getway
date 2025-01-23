<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\CreateAddressMapper;
use App\Service\LocationService;
use App\Utility\GRPC\Response;
use Barsam\Location\Messages\CreateResponse;
use Barsam\Location\Messages\GetCityRequest;
use Barsam\Location\Messages\GetCityResponse;
use Barsam\Location\Messages\GetProvinceRequest;
use Barsam\Location\Messages\GetProvinceResponse;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class LocationController
{

    public function __construct(
        private readonly LocationService $locationService
    )
    {
    }

    #[Route('/addresses/provinces', name: 'address.listProvinces', methods: ['GET'], group: 'api')]
    public function listProvince(): array
    {
        $locationRequest = new GetProvinceRequest();

        /** @var Response $locationResponse */
        $locationResponse = $this->locationService->GetProvince(
            $locationRequest,
            GetProvinceResponse::class
        );

        $provinceArray = [];
        foreach ($locationResponse->getResponse()->getProvinces() as $province) {
            $provinceArray[] = [
                'id' => $province->getId(),
                'name' => $province->getName()
            ];
        }
        return $provinceArray;
    }

    #[Route('/addresses/cities', name: 'address.listCities', methods: ['GET'], group: 'api')]
    public function listCity(InputManager $input): array
    {
        $locationRequest = new GetCityRequest();
        $locationRequest->setProvinceId($input->query('province_id'));

        /** @var Response $locationResponse */
        $locationResponse = $this->locationService->GetCity(
            $locationRequest,
            GetCityResponse::class
        );

        $cityArray = [];
        foreach ($locationResponse->getResponse()->getCities() as $city) {
            $cityArray[] = [
                'id' => $city->getId(),
                'province_id' => $city->getProvinceId(),
                'name' => $city->getName(),
            ];
        }

        return $cityArray;
    }

    #[Route('/addresses', name: 'address.create', methods: ['POST'], group: 'api_auth')]
    public function createAddress(InputManager $input): array
    {
        $locationRequest = CreateAddressMapper::fromRequest($input->data->all());

        /** @var Response $locationResponse */
        $locationResponse = $this->locationService->Create(
            $locationRequest,
            CreateResponse::class
        );

        return [
            'id' => $locationResponse->getResponse()->getId()
        ];

    }

}
