<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\CreateLoanMapper;
use App\Facade\Auth;
use App\Service\LoanService;
use App\Utility\GoogleTimeHelper;
use App\Utility\GRPC\Response;
use Barsam\Loan\Enums\StatusTow;
use Barsam\Loan\Messages\CalculateRequest;
use Barsam\Loan\Messages\CalculateResponse;
use Barsam\Loan\Messages\CreateResponse;
use Barsam\Loan\Messages\GetPlanRequest;
use Barsam\Loan\Messages\GetPlanResponse;
use Barsam\Loan\Messages\GetRequest;
use Barsam\Loan\Messages\GetResponse;
use Barsam\Loan\Messages\UpdateRequest;
use Barsam\Loan\Messages\UpdateResponse;
use Barsam\Loan\Models\Loan;
use Barsam\Loan\Models\Plan;
use Barsam\User\Models\UserMeta;
use DateTimeInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Files\FilesInterface;
use Spiral\Http\Exception\HttpException;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class LoansController
{

    public function __construct(
        private readonly LoanService $loanService,
        private readonly FilesInterface $files,

    )
    {
    }

    #[Route('/loans', name: 'loans.create', methods: ['POST'], group: 'api_auth')]
    public function create(InputManager $input): array
    {
        $loanRequest = CreateLoanMapper::fromRequest($input->data->all());

        /** @var Response<CreateResponse> $loanResponse */
        $loanResponse = $this->loanService->Create(
            $loanRequest,
            CreateResponse::class
        );

        if($loanResponse->getDetail()->code === 13)
        {
            throw new HttpException($loanResponse->getDetail()->details, 406);
        }

        return [
            'id' => $loanResponse->getResponse()->getId()
        ];
    }

    #[Route('/loans', name: 'loans.list', methods: ['GET'], group: 'api_auth')]
    public function list(InputManager $input): array
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
                'status_all' => $loan->getStatus(),
                'status_one' => $loan->getStatusOne(),
                'status_two' => $loan->getStatusTow(),
                'status_three' => $loan->getStatusThree(),
            ];
        }
        return $loansArray;
    }

    #[Route('/loans/calculate', name: 'loans.calculate', methods: ['POST'], group: 'api_auth')]
    public function calculate(InputManager $input): array
    {
        $loanRequest = new CalculateRequest();
        $loanRequest->setPlanId($input->post('plan_id'));
        $loanRequest->setSelectedAmount($input->post('selected_amount', 0));
        $loanRequest->setSelectedDuration($input->post('selected_duration', 0));

        /** @var Response<CalculateResponse> $loanResponse */
        $loanResponse = $this->loanService->Calculate(
            $loanRequest,
            CalculateResponse::class
        );

        return [
            'infrastructure_amount' => $loanResponse->getResponse()->getInfrastructureAmount(),
            'prepayment_amount' => $loanResponse->getResponse()->getPrepaymentAmount(),
            'total_prepayment_amount' => $loanResponse->getResponse()->getTotalPrepaymentAmount(),
            'total_user_payment' => $loanResponse->getResponse()->getTotalUserPayment(),
            'installment_amount' => $loanResponse->getResponse()->getInstallmentAmount(),
        ];
    }

    #[Route('/loans/<id:\d+>', name: 'loans.get', methods: ['GET'], group: 'api_auth')]
    public function get(InputManager $input, ServerRequestInterface $request): array
    {
        $id = $request->getAttribute('route')->getMatches()['id'];
        $loanRequest = new GetRequest();
        $loanRequest->setUserId(Auth::user()->getId());
        $loanRequest->setId($id);
        $loanRequest->setPage($input->post('page', 1));

        /** @var Response<GetResponse> $loanResponse */
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
            'is_approved_by_admin' => $loan->getIsApprovedByAdmin(),
        ];
    }

    #[Route(route: '/loans/<id:\d+>/guarantee', name: 'loans.upload_guarantee', methods: 'POST', group: 'api_auth')]
    public function uploadGuarantee(ServerRequestInterface $request, InputManager $input): array
    {
        $id = $request->getAttribute('route')->getMatches()['id'];

        $guaranteeFile = $input->file('guarantee_file');
//        $guaranteeNumber = $input->post('guarantee_number');

        if ($guaranteeFile === null) {
            throw new HttpException('تصویری اپلود نشده است', 400);
        }

        $mediaType = $guaranteeFile->getClientMediaType();
        if (!in_array($mediaType, ['image/jpeg', 'image/png'])) {
            throw new HttpException('فایل اپلود اشتباه است', 400);
        }

        $storagePath = sprintf('public/uploads/loans/%s', $id);
        $this->files->ensureDirectory($storagePath);

        $guaranteeExt = pathinfo($guaranteeFile->getClientFilename(), PATHINFO_EXTENSION);
        $guaranteeFileName = uniqid('guarantee_') . '.' . strtolower($guaranteeExt);
        $guaranteePath = sprintf('%s/%s', $storagePath, $guaranteeFileName);
        $guaranteeFile->moveTo($guaranteePath);

        $updateLoanRequest = new UpdateRequest([
            'id' => $id,
            'guarantee_file' => $guaranteePath,
            'guarantee_number' => $input->post('guarantee_number'),
            'guarantee_type' => $input->post('guarantee_type'),
            'status_one' => StatusTow::STATUS_LEVEL2_WAITING_FOR_CONFIRMATION,
        ]);

        /** @var Response<UpdateResponse> $updateUserResponse */
        $updateLoanResponse = $this->loanService->Update(
            $updateLoanRequest,
            UpdateResponse::class,
        );
        if ($updateLoanResponse->getDetail()->code !== 0) {
            throw new HttpException('مشکلی در آپلود فایل شمانت وجود دارد', 403);
        }

        return [
            'guarantee_file' => $guaranteePath,
        ];
    }
}
