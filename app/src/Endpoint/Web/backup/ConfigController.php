<?php

namespace App\Endpoint\Web\backup;

use App\Domain\Mapper\Backup\getAllMapper;
use App\Domain\Mapper\Backup\getOneMapper;
use App\Domain\Mapper\Backup\SyncMapper;
use App\Domain\Mapper\Backup\UpdateBatchMapper;
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

    #[Route('/', methods: ['GET'], group: 'api')]
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

    #[Route('/', methods: ['GET'], group: 'api')]
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

    #[Route('/config/all', methods: ['GET'], group: 'api')]
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

    #[Route('/config', methods: ['PUT'], group: 'api')]
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
