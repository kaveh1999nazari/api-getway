<?php

namespace App\Endpoint\Web\backup;

use App\Domain\Mapper\Backup\CpgCreateMapper;
use App\Domain\Mapper\Backup\CpgDeleteMapper;
use App\Domain\Mapper\Backup\CpgGetMapper;
use App\Domain\Mapper\Backup\CpgUpdateMapper;
use App\Service\CpgService;
use Barsam\Cpg\Messages\CreateResponse;
use Barsam\Cpg\Messages\DeleteResponse;
use Barsam\Cpg\Messages\GetResponse;
use Barsam\Cpg\Messages\UpdateResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class CpgController
{

    public function __construct(private readonly CpgService $cpgService)
    {
    }

    #[Route('/cpg', methods: ['POST'], group: 'api')]
    public function create(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $cpgRequest = CpgCreateMapper::fromRequest($input->data->all());

        $cpgResponse = $this->cpgService->create(
            $cpgRequest,
            CreateResponse::class
        );

        return $this->jsonResponse([
            'cpg_request_id' => $cpgResponse->getResponse()->getCpgRequestId()
        ]);
    }

    #[Route('/cpg', methods: ['DELETE'], group: 'api')]
    public function delete(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $cpgRequest = CpgDeleteMapper::fromRequest($input->data->all());

        $cpgResponse = $this->cpgService->Delete(
            $cpgRequest,
            DeleteResponse::class
        );

        return $this->jsonResponse([
            'message' => 'deleted'
        ]);
    }

    #[Route('/cpg', methods: ['GET'], group: 'api')]
    public function get(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $cpgRequest = CpgGetMapper::fromRequest($input->data->all());

        $cpgResponse = $this->cpgService->Get(
            $cpgRequest,
            GetResponse::class
        );

        return $this->jsonResponse([
            'cpg' => $cpgResponse->getResponse()->getCpgs(),
            'total_records' => $cpgResponse->getResponse()->getTotalRecords(),
            'max_page' => $cpgResponse->getResponse()->getMaxPage(),
        ]);
    }

    #[Route('/cpg', methods: ['PUT'], group: 'api')]
    public function update(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $cpgRequest = CpgUpdateMapper::fromRequest($input->data->all());

        $cpgResponse = $this->cpgService->Update(
            $cpgRequest,
            UpdateResponse::class
        );

        return $this->jsonResponse([
            'message' => 'updated'
        ]);
    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }


}
