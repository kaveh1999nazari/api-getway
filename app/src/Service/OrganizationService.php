<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Organization\Messages\AddUserRequest;
use Barsam\Organization\Messages\CreateRequest;
use Barsam\Organization\Messages\DeleteRequest;
use Barsam\Organization\Messages\GetRequest;
use Barsam\Organization\Messages\GetUsersRequest;
use Barsam\Organization\Messages\HasUserRequest;
use Barsam\Organization\Messages\RemoveUserRequest;
use Barsam\Organization\Messages\UpdateRequest;
use Barsam\Organization\OrganizationServiceInterface;

/**
 * @method Create(CreateRequest $request, string $responseClass, array $context = [])
 * @method Update(UpdateRequest $request, string $responseClass, array $context = [])
 * @method Delete(DeleteRequest $request, string $responseClass, array $context = [])
 * @method Get(GetRequest $request, string $responseClass, array $context = [])
 * @method AddUser(AddUserRequest $request, string $responseClass, array $context = [])
 * @method RemoveUser(RemoveUserRequest $request, string $responseClass, array $context = [])
 * @method GetUsers(GetUsersRequest $request, string $responseClass, array $context = [])
 * @method HasUser(HasUserRequest $request, string $responseClass, array $context = [])
 */
class OrganizationService extends AbstractClient
{

    public function getServiceInterface(): string
    {
        return OrganizationServiceInterface::class;
    }
}
