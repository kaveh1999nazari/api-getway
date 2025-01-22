<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Loan\LoanServiceInterface;
use Barsam\Loan\Messages\CreatePlanRequest;
use Barsam\Loan\Messages\CreateRequest;
use Barsam\Loan\Messages\DeletePlanRequest;
use Barsam\Loan\Messages\DeleteRequest;
use Barsam\Loan\Messages\GetPlanRequest;
use Barsam\Loan\Messages\GetRequest;
use Barsam\Loan\Messages\UpdatePlanRequest;
use Barsam\Loan\Messages\UpdateRequest;


/**
 * @method CreatePlan(CreatePlanRequest $request, string $responseClass, array $context = [])
 * @method UpdatePlan(UpdatePlanRequest $request, string $responseClass, array $context = [])
 * @method DeletePlan(DeletePlanRequest $request, string $responseClass, array $context = [])
 * @method GetPlan(GetPlanRequest $request, string $responseClass, array $context = [])
 * @method Create(CreateRequest $request, string $responseClass, array $context = [])
 * @method Update(UpdateRequest $request, string $responseClass, array $context = [])
 * @method Delete(DeleteRequest $request, string $responseClass, array $context = [])
 * @method Get(GetRequest $request, string $responseClass, array $context = [])
 */
class LoanService extends AbstractClient
{

    public function getServiceInterface(): string
    {
        return LoanServiceInterface::class;
    }
}
