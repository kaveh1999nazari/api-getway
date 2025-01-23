<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\CreateShopMapper;
use App\Service\ShopService;
use App\Utility\GRPC\Response;
use Barsam\Shop\Messages\CreateRequest;
use Barsam\Shop\Messages\CreateResponse;
use Barsam\Shop\Messages\GetRequest;
use Barsam\Shop\Messages\GetResponse;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class ShopController
{

//    public function __construct(
//        private readonly ShopService $shopService
//    )
//    {
//    }

//    #[Route('/shop', name: 'shop.get', methods: ['GET'], group: 'api')]
//    public function get(InputManager $input): array
//    {
//        $shopRequest = new GetRequest();
//        $shopRequest->setId($input->query('id'));
//        $shopRequest->setPage($input->query('page') ?? 1);
//        $shopRequest->setPerPage($input->query('per_page' ?? 10));
//            /** @var Response<GetResponse> $shopResponse */
//        $shopResponse = $this->shopService->Get(
//            $shopRequest,
//            GetResponse::class
//        );
//
//        return [
//            'shop' => $shopResponse->getResponse()->getShops(),
//        ];
//    }

//    #[Route('/shop', name: 'shop.get', methods: ['POST'], group: 'api')]
//    public function create(InputManager $input): array
//    {
//        $shopRequest = CreateShopMapper::fromRequest($input->data->all());
//
//        $shopResponse = $this->shopService->Create(
//            $shopRequest,
//            CreateResponse::class
//        );
//
//        return [];
//
//    }

}
