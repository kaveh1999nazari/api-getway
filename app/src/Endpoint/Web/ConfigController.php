<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\getAllMapper;
use App\Domain\Mapper\getOneMapper;
use App\Domain\Mapper\SyncMapper;
use App\Domain\Mapper\UpdateBatchMapper;
use App\Service\ConfigService;
use Barsam\Config\Messages\GetAllResponse;
use Barsam\Config\Messages\GetOneResponse;
use Barsam\Config\Messages\SyncResponse;
use Barsam\Config\Messages\UpdateBatchResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class ConfigController
{
    public function __construct(private readonly ConfigService $configService)
    {
    }

    #[Route('/api/', methods: ['GET'])]
    public function sync(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $configRequest = SyncMapper::fromRequest($input->data->all());

        $configResponse = $this->configService->Sync(
            $configRequest,
            SyncResponse::class
        );

        return $this->jsonResponse([
            'status' => $configResponse->getResponse()->getStatus(),
        ]);
    }

    #[Route('/api/', methods: ['GET'])]
    public function getOne(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $configRequest = getOneMapper::fromRequest($input->data->all());

        $configResponse = $this->configService->GetOne(
            $configRequest,
            GetOneResponse::class
        );

        return $this->jsonResponse([
            'config' => $configResponse->getResponse()->getConfig(),
        ]);

    }

    #[Route('/api/config/all', methods: ['GET'])]
    public function getAll(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $configRequest = getAllMapper::fromRequest($input->data->all());

        $configResponse = $this->configService->GetAll(
            $configRequest,
            GetAllResponse::class
        );

        return $this->jsonResponse([
            'configs' => $configResponse->getResponse()->getConfigs(),
        ]);
    }

    #[Route('/api/config', methods: ['PUT'])]
    public function updateBatch(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $configRequest = UpdateBatchMapper::fromRequest($input->data->all());

        $configResponse = $this->configService->UpdateBatch(
            $configRequest,
            UpdateBatchResponse::class
        );

        return $this->jsonResponse([
            'status' => $configResponse->getResponse()->getStatus(),
        ]);
    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }

}
