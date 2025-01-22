<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\CreateCpgMapper;
use App\Service\CpgService;
use Barsam\Cpg\Messages\CreateResponse;
use Barsam\Cpg\Messages\GetRequest;
use Barsam\Cpg\Messages\GetResponse;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class CpgController
{

    public function __construct(private readonly CpgService $cpgService)
    {
    }

    #[Route('/cpg', name: 'cpg.create', methods: ['POST'], group: 'api_merchant')]
    public function create(InputManager $input): array
    {
        $cpgRequest = CreateCpgMapper::fromRequest($input->data->all());

        $cpgResponse = $this->cpgService->create(
            $cpgRequest,
            CreateResponse::class
        );

        return [
            'cpg_id' => $cpgResponse->getResponse()->getCpgRequestId()
        ];
    }

    #[Route('/cpg', name: 'cpg.get', methods: ['GET'], group: 'api_merchant')]
    public function get(InputManager $input): array
    {
        $cpgRequest = new GetRequest();
        $cpgRequest->setId($input->post('id'));
        $cpgRequest->setPage($input->query('page' ?? 1));
        $cpgRequest->setPerPage($input->query('per_page' ?? 10));

        $cpgResponse = $this->cpgService->Get(
            $cpgRequest,
            GetResponse::class
        );

        return [
            'cpg' => $cpgResponse->getResponse()->getCpgs(),
            'total_records' => $cpgResponse->getResponse()->getTotalRecords(),
            'max_page' => $cpgResponse->getResponse()->getMaxPage(),
        ];
    }

//    #[Route('/cpg', name: 'cpg.delete', methods: ['DELETE'], group: 'api_merchant')]
//    public function delete(ServerRequestInterface $request, InputManager $input): array
//    {
//        $cpgRequest = CpgDeleteMapper::fromRequest($input->data->all());
//
//        $cpgResponse = $this->cpgService->Delete(
//            $cpgRequest,
//            DeleteResponse::class
//        );
//
//        return [];
//    }

//    #[Route('/cpg', name: 'cpg.update', methods: ['PUT'], group: 'api_merchant')]
//    public function update(ServerRequestInterface $request, InputManager $input): array
//    {
//        $cpgRequest = CpgUpdateMapper::fromRequest($input->data->all());
//
//        $cpgResponse = $this->cpgService->Update(
//            $cpgRequest,
//            UpdateResponse::class
//        );
//
//        return [];
//    }


}
