<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Installment\InstallmentServiceInterface;
use Barsam\Installment\Messages\CreateRequest;
use Barsam\Installment\Messages\DeleteRequest;
use Barsam\Installment\Messages\GenerateRequest;
use Barsam\Installment\Messages\GetRequest;
use Barsam\Installment\Messages\UpdateRequest;


/**
 * @method Create(CreateRequest $request, string $responseClass, array $context = [])
 * @method Generate(GenerateRequest $request, string $responseClass, array $context = [])
 * @method Update(UpdateRequest $request, string $responseClass, array $context = [])
 * @method Delete(DeleteRequest $request, string $responseClass, array $context = [])
 * @method Get(GetRequest $request, string $responseClass, array $context = [])
 */
class InstallmentService extends AbstractClient
{

    public function getServiceInterface(): string
    {
        return InstallmentServiceInterface::class;
    }
}
