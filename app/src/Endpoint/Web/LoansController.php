<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\CreateLoanMapper;
use App\Endpoint\Web\backup\GetPlanLoanMapper;
use App\Facade\Auth;
use App\Service\LoanService;
use App\Utility\GoogleTimeHelper;
use App\Utility\GRPC\Response;
use Barsam\Loan\Messages\CreateResponse;
use Barsam\Loan\Messages\GetPlanRequest;
use Barsam\Loan\Messages\GetPlanResponse;
use Barsam\Loan\Messages\GetRequest;
use Barsam\Loan\Messages\GetResponse;
use Barsam\Loan\Models\Loan;
use Barsam\Loan\Models\Plan;
use DateTimeInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;
use Spiral\Http\Exception\HttpException;

class LoansController
{

    public function __construct(
        private readonly LoanService $loanService,
    )
    {
    }

    #[Route('/loans', name: 'loans.create', methods: ['POST'], group: 'api_auth')]
    public function create(InputManager $input): array
    {
        $loanRequest = CreateLoanMapper::fromRequest($input->data->all(), Auth::user()->getId());

        $loanResponse = $this->loanService->Create(
            $loanRequest,
            CreateResponse::class
        );

        return [
            'id' => $loanResponse->getResponse()->getId()
        ];
    }

    #[Route('/loans', name: 'loans.list', methods: ['GET'], group: 'api_auth')]
    public function list(ServerRequestInterface $request, InputManager $input): array
    {
        $loanRequest = new GetRequest();
        $loanRequest->setUserId(Auth::user()->getId());
        $loanRequest->setPage($input->query('page', '1'));

        /** @var Response<GetResponse> $loanResponse */
        $loanResponse = $this->loanService->Get(
            $loanRequest,
            GetResponse::class
        );

        /** @var Response<GetPlanResponse> $plansResponse */
        $plansResponse = $this->loanService->GetPlan(new GetPlanRequest(), GetPlanResponse::class);

        /** @var Plan[] $plans */
        $plans = iterator_to_array($plansResponse->getResponse()->getPlans());
        $plansList = [];

        foreach ($plans as $plan) {
            $plansList[$plan->getId()] = [
                'id' => $plan->getId(),
                'title' => $plan->getTitle(),
                'description' => $plan->getDescription(),
                'interest_rate' => $plan->getInterestRate(),
                'infrastructure_rate' => $plan->getInfrastructureRate(),
                'prepayment_rate' => $plan->getPrepaymentRate(),
                'max_amount' => $plan->getMaxAmount(),
                'min_amount' => $plan->getMinAmount(),
                'available_durations' => explode(',', $plan->getAvailableDurations()),
            ];
        }

        $loans = $loanResponse->getResponse()->getLoans();
        $loansArray = [];

        /** @var Loan $loan */
        foreach ($loans as $loan) {
            $loansArray[] = [
                'id' => $loan->getId(),
                'user_id' => $loan->getUserId(),
                'plan_id' => $loan->getPlanId(),
                'plan' => $plansList[$loan->getPlanId()],
                'selected_amount' => $loan->getSelectedAmount(),
                'selected_duration' => $loan->getSelectedDuration(),
                'installment_amount' => $loan->getInstallmentAmount(),
                'infrastructure_amount' => $loan->getInfrastructureAmount(),
                'prepayment_amount' => $loan->getPrepaymentAmount(),
                'total_prepayment_amount' => $loan->getTotalPrepaymentAmount(),
                'total_user_payment' => $loan->getTotalUserPayment(),
                'credit_remaining' => $loan->getCreditRemaining(),
                'refund_bank_account_number' => $loan->getRefundBankAccountNumber(),
                'granted_at' => $loan->getGrantedAt()->getSeconds() ?
                    GoogleTimeHelper::timestampToDateTimeImmutable($loan->getGrantedAt())->format(DateTimeInterface::ATOM)
                    : null,
                'created_at' => $loan->getCreatedAt()->getSeconds() ?
                    GoogleTimeHelper::timestampToDateTimeImmutable($loan->getCreatedAt())->format(DateTimeInterface::ATOM)
                    : null,
                'status' => $loan->getStatus(),
                'status_one' => $loan->getStatusOne(),
                'status_two' => $loan->getStatusTow(),
                'status_three' => $loan->getStatusThree(),
            ];




        }
        return $loansArray;
    }

    #[Route('/loans/<id:\d+>', name: 'loans.get', methods: ['GET'], group: 'api_auth')]
    public function get(InputManager $input, ServerRequestInterface $request): array
    {
        $id = $request->getAttribute('route')->getMatches()['id'];
        $loanRequest = new GetRequest();
        $loanRequest->setUserId(Auth::user()->getId());
        $loanRequest->setId($id);
        $loanRequest->setPage($input->post('page', 1));

        $loanResponse = $this->loanService->Get(
            $loanRequest,
            GetResponse::class
        );
        /** @var Loan $loan */
        $loan = iterator_to_array($loanResponse->getResponse()->getLoans())[0];

        $planResponse = $this->loanService->GetPlan(new GetPlanRequest(['id' => $loan->getPlanId()]), GetPlanResponse::class);

        /** @var Plan $plan */
        $plan = iterator_to_array($planResponse->getResponse()->getPlans())[0];

        return [
            'id' => $loan->getId(),
            'user_id' => $loan->getUserId(),
            'plan_id' => $loan->getPlanId(),
            'plan' => [
                'id' => $plan->getId(),
                'title' => $plan->getTitle(),
                'description' => $plan->getDescription(),
                'interest_rate' => $plan->getInterestRate(),
                'infrastructure_rate' => $plan->getInfrastructureRate(),
                'prepayment_rate' => $plan->getPrepaymentRate(),
                'max_amount' => $plan->getMaxAmount(),
                'min_amount' => $plan->getMinAmount(),
                'available_durations' => explode(',', $plan->getAvailableDurations()),
            ],
            'selected_amount' => $loan->getSelectedAmount(),
            'selected_duration' => $loan->getSelectedDuration(),
            'installment_amount' => $loan->getInstallmentAmount(),
            'infrastructure_amount' => $loan->getInfrastructureAmount(),
            'prepayment_amount' => $loan->getPrepaymentAmount(),
            'total_prepayment_amount' => $loan->getTotalPrepaymentAmount(),
            'total_user_payment' => $loan->getTotalUserPayment(),
            'credit_remaining' => $loan->getCreditRemaining(),
            'total_paid_installment' => 0,
            'refund_bank_account_number' => $loan->getRefundBankAccountNumber(),
            'granted_at' => $loan->getGrantedAt()->getSeconds() ?
                GoogleTimeHelper::timestampToDateTimeImmutable($loan->getGrantedAt())->format(DateTimeInterface::ATOM)
                : null,
            'status_all' => $loan->getStatus(),
            'status_one' => $loan->getStatusOne(),
            'status_two' => $loan->getStatusTow(),
            'status_three' => $loan->getStatusThree(),
        ];
    }

    #[Route('/loans/plans/', methods: ['GET'], group: 'api_auth')]
    public function getPlan(InputManager $input, ServerRequestInterface $request): array
    {
        $amount = $input->query('amount');

        $loanRequest = GetPlanLoanMapper::fromRequest($input->data->all());

        $loanResponse = $this->loanService->GetPlan(
            $loanRequest,
            GetPlanResponse::class
        );

        $min = $loanResponse->getResponse()->getplans()[0]->getMinAmount();
        $max = $loanResponse->getResponse()->getplans()[0]->getMaxAmount();

        if ($amount >= $min && $amount <= $max) {
            $loan = iterator_to_array($loanResponse->getResponse()->getPlans())[0];
            return [
                'available_durations' => explode(',', $loan->getAvailableDurations()),
            ];
        } else {
            throw new HttpException('مقدارت با مقدار موجود نمیخونه', 406);
        }
    }
}
