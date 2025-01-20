<?php

namespace App\Endpoint\Web\backup;

use App\Domain\Mapper\CreateInstallmentMapper;
use App\Domain\Mapper\DeleteInstallmentMapper;
use App\Domain\Mapper\GenerateInstallmentMapper;
use App\Domain\Mapper\GetInstallmentMapper;
use App\Domain\Mapper\UpdateInstallmentMapper;
use App\Service\InstallmentService;
use Barsam\Installment\Messages\CreateResponse;
use Barsam\Installment\Messages\DeleteResponse;
use Barsam\Installment\Messages\GenerateResponse;
use Barsam\Installment\Messages\GetAllResponse;
use Barsam\Installment\Messages\GetResponse;
use Barsam\Installment\Messages\UpdateResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class InstallmentController
{

    public function __construct(private readonly InstallmentService $installmentService)
    {
    }

    #[Route('/api/installment', methods: ['POST'])]
    public function create(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $installmentRequest = CreateInstallmentMapper::fromRequest($input->data->all());

        $installmentResponse = $this->installmentService->Create(
            $installmentRequest,
            CreateResponse::class
        );

        return $this->jsonResponse([
            'id' => $installmentResponse->getResponse()->getId()
        ]);
    }

    #[Route('/api/installment/generate', methods: ['POST'])]
    public function generate(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $installmentRequest = GenerateInstallmentMapper::fromRequest($input->data->all());

        $installmentResponse = $this->installmentService->Generate(
            $installmentRequest,
            GenerateResponse::class
        );

        return $this->jsonResponse([
            'ids' => $installmentResponse->getResponse()->getIds()
        ]);

    }

    #[Route('/api/installment', methods: ['PUT'])]
    public function update(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $installmentRequest = UpdateInstallmentMapper::fromRequest($input->data->all());

        $installmentResponse = $this->installmentService->Update(
            $installmentRequest,
            UpdateResponse::class
        );

        return $this->jsonResponse([
            'message' => 'updated'
        ]);

    }

    #[Route('/api/installment', methods: ['DELETE'])]
    public function delete(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $installmentRequest = DeleteInstallmentMapper::fromRequest($input->data->all());

        $installmentResponse = $this->installmentService->Delete(
            $installmentRequest,
            DeleteResponse::class
        );

        return $this->jsonResponse([
            'message' => 'deleted'
        ]);

    }

    #[Route('/api/installment', methods: ['GET'])]
    public function get(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $installmentRequest = GetInstallmentMapper::fromRequest($input->data->all());

        $installmentResponse = $this->installmentService->Get(
            $installmentRequest,
            GetResponse::class
        );

        $installments = $installmentResponse->getResponse()->getInstallments();
        $installmentsArray = [];
        foreach ($installments as $installment) {
            $installmentsArray[] = [
                'id' => $installment->getId(),
                'user_id' => $installment->getUserId(),
                'loan_id' => $installment->getLoanId(),
                'number' => $installment->getNumber(),
                'amount' => $installment->getAmount(),
                'penalty_amount' => $installment->getPenaltyAmount(),
                'due_date' => $installment->getDueDate(),
                'created_at' => [
                    'seconds' => $installment->getCreatedAt()->getSeconds(),
                    'nanos' => $installment->getCreatedAt()->getNanos(),
                ],
                'updated_at' => [
                    'seconds' => $installment->getUpdatedAt()->getSeconds(),
                    'nanos' => $installment->getUpdatedAt()->getNanos(),
                ],
                'deleted_at' => $installment->getDeletedAt() ? [
                    'seconds' => $installment->getDeletedAt()->getSeconds(),
                    'nanos' => $installment->getDeletedAt()->getNanos(),
                ] : null,
            ];
        }

        return $this->jsonResponse([
            'installments' => $installmentsArray,
            'total_records' => $installmentResponse->getResponse()->getTotalRecords(),
            'max_page' => $installmentResponse->getResponse()->getMaxPage(),
        ]);
    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
