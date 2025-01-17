<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\CreateLoanMapper;
use App\Domain\Mapper\CreatePlanLoanMapper;
use App\Domain\Mapper\DeleteLoanMapper;
use App\Domain\Mapper\DeletePlanLoanMapper;
use App\Domain\Mapper\GetAllPlanLoanMapper;
use App\Domain\Mapper\GetLoanMapper;
use App\Domain\Mapper\UpdateLoanMapper;
use App\Domain\Mapper\UpdatePlanLoanMapper;
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

    #[Route('/api/loan/plan', methods: ['POST'])]
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

    #[Route('/api/loan/plan', methods: ['PUT'])]
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

    #[Route('/api/loan/plan', methods: ['DELETE'])]
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

    #[Route('/api/loan/plan', methods: ['GET'])]
    public function getAllPlans(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $loanRequest = GetAllPlanLoanMapper::fromRequest($input->data->all());

        $loanResponse = $this->loanService->GetAllPlans(
            $loanRequest,
            GetAllPlansResponse::class
        );

        return $this->jsonResponse([
            'data' => $loanResponse->getResponse()->getData()
        ]);
    }

    #[Route('/api/loan', methods: ['POST'])]
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

    #[Route('/api/loan', methods: ['PUT'])]
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

    #[Route('/api/loan', methods: ['DELETE'])]
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

    #[Route('/api/loan', methods: ['GET'])]
    public function get(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $loanRequest = GetLoanMapper::fromRequest($input->data->all());

        $loanResponse = $this->loanService->Get(
            $loanRequest,
            GetResponse::class
        );

        return $this->jsonResponse([
            'data' => $loanResponse->getResponse()->getData()
        ]);
    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
