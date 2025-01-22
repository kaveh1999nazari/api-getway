<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\GetInstallmentMapper;
use App\Facade\Auth;
use App\Service\InstallmentService;
use Barsam\Installment\Messages\GetResponse;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class InstallmentController
{
    public function __construct(
        private readonly InstallmentService $installmentService,
    )
    {
    }

    #[Route('loans/:id/installments', name: 'loans.installments', methods: ['GET'], group: 'api_auth')]
    public function list(InputManager $input, int $id): array
    {
        $installmentRequest = GetInstallmentMapper::fromRequest($input->data->all(), $id, Auth::user()->getId());

        $installmentResponse = $this->installmentService->Get(
            $installmentRequest,
            GetResponse::class
        );

        dump($installmentResponse->getDetail());
        dump($installmentResponse->getResponse());

        return [];
    }

}
