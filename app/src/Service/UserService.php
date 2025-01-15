<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\User\Messages\DeleteRequest;
use Barsam\User\Messages\GetRequest;
use Barsam\User\Messages\RegisterRequest;
use Barsam\User\Messages\UpdateRequest;
use Barsam\User\UserServiceInterface;

/**
 * @method Register(RegisterRequest $request, string $responseClass, array $context = [])
 * @method Update(UpdateRequest $request, string $responseClass, array $context = [])
 * @method Delete(DeleteRequest $request, string $responseClass, array $context = [])
 * @method Get(GetRequest $request, string $responseClass, array $context = [])
 * @method CheckCredentials(RegisterRequest $request, string $responseClass, array $context = [])
 */
class UserService extends AbstractClient
{
    public function getServiceInterface(): string
    {
        return UserServiceInterface::class;
    }
}
