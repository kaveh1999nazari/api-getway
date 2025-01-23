<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\CreateAddressMapper;
use App\Facade\Auth;
use App\Service\LocationService;
use App\Utility\GRPC\Response;
use Barsam\Location\Messages\CreateResponse;
use Barsam\Location\Messages\DeleteRequest;
use Barsam\Location\Messages\DeleteResponse;
use Barsam\Location\Messages\GetCityRequest;
use Barsam\Location\Messages\GetCityResponse;
use Barsam\Location\Messages\GetProvinceRequest;
use Barsam\Location\Messages\GetProvinceResponse;
use Barsam\Location\Messages\GetRequest;
use Barsam\Location\Messages\GetResponse;
use Barsam\Location\Models\Address;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Exception\HttpException;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class LocationController
{

    public function __construct(
        private readonly LocationService $locationService
    )
    {
    }

    #[Route('/addresses/provinces', name: 'location.listProvinces', methods: ['GET'], group: 'api_auth')]
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

    #[Route('/addresses/cities', name: 'location.listCities', methods: ['GET'], group: 'api_auth')]
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

    #[Route('/addresses', name: 'location.create', methods: ['POST'], group: 'api_auth')]
    public function create(InputManager $input): array
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

    #[Route('/addresses', name: 'location.list', methods: ['GET'], group: 'api_auth')]
    public function list(InputManager $input, ServerRequestInterface $request): array
    {
        $locationRequest = new GetRequest();
        $locationRequest->setUserId(Auth::user()->getId());

        /** @var Response<GetResponse> $locationResponse */
        $locationResponse = $this->locationService->Get(
            $locationRequest,
            GetResponse::class
        );

        $addresses = [];
        foreach($locationResponse->getResponse()->getAddresses() as $address) {
            $addresses[] = [
                'id' => $address->getId(),
                'city_id' => $address->getCityId(),
                'address' => $address->getAddress(),
                'postal_code' => $address->getPostalCode(),
                'phone_number' => $address->getPhoneNumber()
            ];
        }

        return $addresses;
    }

    #[Route('/addresses/<id:\d+>', name: 'location.get', methods: ['GET'], group: 'api_auth')]
    public function get(InputManager $input, ServerRequestInterface $request): array
    {
        $id = $request->getAttribute('route')->getMatches()['id'];

        $locationRequest = new GetRequest();
        $locationRequest->setId($id);
        $locationRequest->setUserId(Auth::user()->getId());

        /** @var Response<GetResponse> $locationResponse */
        $locationResponse = $this->locationService->Get(
            $locationRequest,
            GetResponse::class
        );

        /** @var Address[] $addresses */
        $addresses = iterator_to_array($locationResponse->getResponse()->getAddresses());
        if (count($addresses) === 0) {
            throw new HttpException('آدرس مورد نظر یافت نشد', 404);
        }
        $address = $addresses[0];

        return [
            'id' => $address->getId(),
            'city_id' => $address->getCityId(),
            'address' => $address->getAddress(),
            'postal_code' => $address->getPostalCode(),
            'phone_number' => $address->getPhoneNumber(),
        ];
    }

    #[Route('/addresses/<id:\d+>', name: 'location.delete', methods: ['DELETE'], group: 'api_auth')]
    public function delete(InputManager $input, ServerRequestInterface $request): array
    {
        $id = $request->getAttribute('route')->getMatches()['id'];

        $locationRequest = new DeleteRequest();
        $locationRequest->setId($id);

        /** @var Response $locationResponse */
        $locationResponse = $this->locationService->Delete(
            $locationRequest,
            DeleteResponse::class
        );

        return [];
    }

}
