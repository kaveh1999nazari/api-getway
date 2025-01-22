<?php

namespace App\Endpoint\Web;

use App\Endpoint\Web\backup\GetPlanLoanMapper;
use App\Service\LoanService;
use App\Utility\GRPC\Response;
use Barsam\Loan\Messages\GetPlanRequest;
use Barsam\Loan\Messages\GetPlanResponse;
use Barsam\Loan\Models\Plan;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Exception\HttpException;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class PlansController
{
    public function __construct(
        private readonly LoanService $loanService,
    )
    {
    }

    #[Route('/plans', name: 'plans.list', methods: ['GET'], group: 'api_auth')]
    public function list(InputManager $input): array
    {
        $amount = $input->query('amount');

        $planRequest = GetPlanLoanMapper::fromRequest();

        /** @var Response<GetPlanResponse> $planResponse */
        $planResponse = $this->loanService->GetPlan(
            $planRequest,
            GetPlanResponse::class
        );

        $plans = $planResponse->getResponse()->getplans();
        $availablePlans = [];

        /** @var Plan $plan */
        foreach ($plans as $plan) {
            if ($amount >= $plan->getMinAmount() && $amount <= $plan->getMaxAmount()) {
                $availablePlans[] = [
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
        }

        return $availablePlans;
    }

    #[Route('/plans/limits', name: 'plans.limits', methods: ['GET'], group: 'api_auth')]
    public function limits(InputManager $input): array
    {
        /** @var Response<GetPlanResponse> $loanResponse */
        $loanResponse = $this->loanService->GetPlan(
            new GetPlanRequest(['per_page' => 50]),
            GetPlanResponse::class
        );

        $plans = $loanResponse->getResponse()->getplans();
        $minAmount = null;
        $maxAmount = null;

        /** @var Plan $plan */
        foreach ($plans as $plan) {
            if ($minAmount !== null) {
                $minAmount = min($minAmount, $plan->getMinAmount());
            } else {
                $minAmount = $plan->getMinAmount();
            }
            if ($maxAmount !== null) {
                $maxAmount = max($maxAmount, $plan->getMaxAmount());
            } else {
                $maxAmount = $plan->getMaxAmount();
            }
        }

        return [
            'min' => $minAmount,
            'max' => $maxAmount,
        ];
    }
}
