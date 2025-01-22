<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\GetInstallmentMapper;
use App\Facade\Auth;
use App\Service\InstallmentService;
use App\Utility\GoogleTimeHelper;
use Barsam\Installment\Messages\GetResponse;
use DateTimeInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class InstallmentController
{
    public function __construct(
        private readonly InstallmentService $installmentService,
    )
    {
    }

    #[Route('loans/<id:\d+>/installments/', name: 'installments.list', methods: ['GET'], group: 'api_auth')]
    public function list(InputManager $input, ServerRequestInterface $request): array
    {
        $id = $request->getAttribute('route')->getMatches()['id'];
        $installmentRequest = GetInstallmentMapper::fromRequest($input->query->all(), $id, Auth::user()->getId());

        $installmentResponse = $this->installmentService->Get(
            $installmentRequest,
            GetResponse::class
        );

        $installments = $installmentResponse->getResponse()->getInstallments();

        $installmentDetails = [];
        foreach ($installments as $installment) {
            $installmentDetails[] = [
                'id' => $installment->getId(),
                'user_id' => $installment->getUserId(),
                'loan_id' => $installment->getLoanId(),
                'number' => $installment->getNumber(),
                'amount' => $installment->getAmount(),
                'penalty_amount' => $installment->getPenaltyAmount(),
                'created_at' => GoogleTimeHelper::timestampToDateTimeImmutable($installment->getCreatedAt())->format(DateTimeInterface::ATOM),
                'updated_at' => GoogleTimeHelper::timestampToDateTimeImmutable($installment->getUpdatedAt())->format(DateTimeInterface::ATOM)
            ];
        }

        return $installmentDetails;

    }
}
