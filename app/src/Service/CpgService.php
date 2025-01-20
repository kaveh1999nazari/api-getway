<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Cpg\CPGServiceInterface;
use Barsam\Cpg\Messages\CreateRequest;
use Barsam\Cpg\Messages\DeleteRequest;
use Barsam\Cpg\Messages\GetRequest;
use Barsam\Cpg\Messages\UpdateRequest;


/**
 * @method Create(CreateRequest $request, string $responseClass, array $context = [])
 * @method Delete(DeleteRequest $request, string $responseClass, array $context = [])
 * @method Get(GetRequest $request, string $responseClass, array $context = [])
 * @method Update(UpdateRequest $request, string $responseClass, array $context = [])
 */
class CpgService extends AbstractClient
{

    public function getServiceInterface(): string
    {
        return CpgServiceInterface::class;
    }
}
