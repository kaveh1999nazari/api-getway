<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\GetInstallmentMapper;
use App\Facade\Auth;
use App\Service\InstallmentService;
use App\Utility\GoogleTimeHelper;
use App\Utility\GRPC\Response;
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

        /** @var Response $installmentResponse */
        $installmentResponse = $this->installmentService->Get(
            $installmentRequest,
            GetResponse::class
        );

//        dump($installmentResponse->getResponse());
//        dump($installmentResponse->getDetail());
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
                'due_date' => $installment->getDueDate(),
                'created_at' => GoogleTimeHelper::timestampToDateTimeImmutable($installment->getCreatedAt())->format(DateTimeInterface::ATOM),
                'updated_at' => GoogleTimeHelper::timestampToDateTimeImmutable($installment->getUpdatedAt())->format(DateTimeInterface::ATOM)
            ];
        }

        return $installmentDetails;

    }
}
