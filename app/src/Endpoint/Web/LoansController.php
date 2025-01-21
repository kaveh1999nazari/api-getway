<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\CreateLoanMapper;
use App\Domain\Mapper\GetLoanMapper;
use App\Endpoint\Web\Middleware\AuthMiddleware;
use App\Facade\Auth;
use App\Service\AuthService;
use App\Service\LoanService;
use App\Utility\GoogleTimeHelper;
use Barsam\Auth\Messages\ValidateTokenRequest;
use Barsam\Auth\Messages\ValidateTokenResponse;
use Barsam\Loan\Messages\CreateResponse;
use Barsam\Loan\Messages\GetRequest;
use Barsam\Loan\Messages\GetResponse;
use DateTimeInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class LoansController
{

    public function __construct(
        private readonly LoanService $loanService,
        private readonly AuthService $authService,
    ) { }

    #[Route('/loans', name: 'loans.create', methods: ['POST'], group: 'api_auth')]
    public function create(InputManager $input): array
    {
        $loanRequest = CreateLoanMapper::fromRequest($input->data->all());

        $loanResponse = $this->loanService->Create(
            $loanRequest,
            CreateResponse::class
        );

        dump($loanResponse->getDetail());

        return [];
    }

    #[Route('/loans', name: 'loans.list', methods: ['GET'], group: 'api_auth')]
    public function list(ServerRequestInterface $request, InputManager $input): array
    {
        $loanRequest = new GetRequest();
        $loanRequest->setUserId(Auth::user()->getId());
        $loanRequest->setPage($input->post('page', 1));

        $loanResponse = $this->loanService->Get(
            $loanRequest,
            GetResponse::class
        );

        $loans = $loanResponse->getResponse()->getLoans();
        $loansArray = [];
        foreach ($loans as $loan) {
            $loansArray[] = [
                'id' => $loan->getId(),
                'user_id' => $loan->getUserId(),
                'plan_id' => $loan->getPlanId(),
                'selected_amount' => $loan->getSelectedAmount(),
                'selected_duration' => $loan->getSelectedDuration(),
                'installment_amount' => $loan->getInstallmentAmount(),
                'infrastructure_amount' => $loan->getInfrastructureAmount(),
                'prepayment_amount' => $loan->getPrepaymentAmount(),
                'total_prepayment_amount' => $loan->getTotalPrepaymentAmount(),
                'total_user_payment' => $loan->getTotalUserPayment(),
                'credit_remaining' => $loan->getCreditRemaining(),
                'refund_bank_account_number' => $loan->getRefundBankAccountNumber(),
            ];

        }
        return ['loans' => $loansArray[0]];
    }
}
