<?php

namespace App\Endpoint\Web\backup;

use App\Domain\Mapper\Backup\CreatePlanLoanMapper;
use App\Domain\Mapper\Backup\DeleteLoanMapper;
use App\Domain\Mapper\Backup\DeletePlanLoanMapper;
use App\Domain\Mapper\Backup\GetLoanMapper;
use App\Domain\Mapper\Backup\UpdateLoanMapper;
use App\Domain\Mapper\Backup\UpdatePlanLoanMapper;
use App\Domain\Mapper\CreateLoanMapper;
use App\Service\LoanService;
use Barsam\Loan\Messages\CreatePlanResponse;
use Barsam\Loan\Messages\CreateResponse;
use Barsam\Loan\Messages\DeletePlanResponse;
use Barsam\Loan\Messages\DeleteResponse;
use Barsam\Loan\Messages\GetAllPlansResponse;
use Barsam\Loan\Messages\GetResponse;
use Barsam\Loan\Messages\UpdatePlanResponse;
use Barsam\Loan\Messages\UpdateResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class LoanController
{

    public function __construct(private readonly LoanService $loanService)
    {
    }

    #[Route('/loan/plan', methods: ['POST'], group: 'api')]
    public function createPlan(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $loanRequest = CreatePlanLoanMapper::fromRequest($input->data->all());

        $loanResponse = $this->loanService->CreatePlan(
            $loanRequest,
            CreatePlanResponse::class
        );

        return $this->jsonResponse([
            'id' => $loanResponse->getResponse()->getId()
        ]);

    }

    #[Route('/loan/plan', methods: ['PUT'], group: 'api')]
    public function updatePlan(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $loanRequest = UpdatePlanLoanMapper::fromRequest($input->data->all());

        $loanResponse = $this->loanService->UpdatePlan(
            $loanRequest,
            UpdatePlanResponse::class
        );

        return $this->jsonResponse([
            'message' => 'updated'
        ]);
    }

    #[Route('/loan/plan', methods: ['DELETE'], group: 'api')]
    public function deletePlan(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $loanRequest = DeletePlanLoanMapper::fromRequest($input->data->all());

        $loanResponse = $this->loanService->DeletePlan(
            $loanRequest,
            DeletePlanResponse::class
        );

        return $this->jsonResponse([
            'message' => 'deleted'
        ]);
    }

    #[Route('/loan', methods: ['POST'], group: 'api')]
    public function create(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $loanRequest = CreateLoanMapper::fromRequest($input->data->all());

        $loanResponse = $this->loanService->Create(
            $loanRequest,
            CreateResponse::class
        );

        return $this->jsonResponse([
            'id' => $loanResponse->getResponse()->getId()
        ]);
    }

    #[Route('/loan', methods: ['PUT'], group: 'api')]
    public function update(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $loanRequest = UpdateLoanMapper::fromRequest($input->data->all());

        $loanResponse = $this->loanService->Update(
            $loanRequest,
            UpdateResponse::class
        );

        return $this->jsonResponse([
            'message' => 'deleted'
        ]);
    }

    #[Route('/loan', methods: ['DELETE'], group: 'api')]
    public function delete(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $loanRequest = DeleteLoanMapper::fromRequest($input->data->all());

        $loanResponse = $this->loanService->Delete(
            $loanRequest,
            DeleteResponse::class
        );

        return $this->jsonResponse([
            'message' => 'deleted'
        ]);
    }

    #[Route('/loan', methods: ['GET'], group: 'api')]
    public function get(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $loanRequest = GetLoanMapper::fromRequest($input->data->all());

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
                'granted_at' => [
                    'seconds' => $loan->getGrantedAt()->getSeconds(),
                    'nanos' => $loan->getGrantedAt()->getNanos(),
                ],
                'refund_bank_account_number' => $loan->getRefundBankAccountNumber(),
                'created_at' => [
                    'seconds' => $loan->getCreatedAt()->getSeconds(),
                    'nanos' => $loan->getCreatedAt()->getNanos(),
                ],
                'updated_at' => [
                    'seconds' => $loan->getUpdatedAt()->getSeconds(),
                    'nanos' => $loan->getUpdatedAt()->getNanos(),
                ],
                'deleted_at' => $loan->getDeletedAt() ? [
                    'seconds' => $loan->getDeletedAt()->getSeconds(),
                    'nanos' => $loan->getDeletedAt()->getNanos(),
                ] : null,
            ];
        }

        return $this->jsonResponse([
            'loans' => $loansArray,
            'total_records' => $loanResponse->getResponse()->getTotalRecords(),
            'max_page' => $loanResponse->getResponse()->getMaxPage(),
        ]);
    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
