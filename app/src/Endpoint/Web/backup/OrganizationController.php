<?php

namespace App\Endpoint\Web\backup;

use App\Domain\Mapper\OrganizationAddUserMapper;
use App\Domain\Mapper\OrganizationCreateMapper;
use App\Domain\Mapper\OrganizationDeleteMapper;
use App\Domain\Mapper\OrganizationGetMapper;
use App\Domain\Mapper\OrganizationGetUsersMapper;
use App\Domain\Mapper\OrganizationHasUserMapper;
use App\Domain\Mapper\OrganizationRemoveUserMapper;
use App\Domain\Mapper\OrganizationUpdateMapper;
use App\Service\OrganizationService;
use Barsam\Organization\Messages\AddUserResponse;
use Barsam\Organization\Messages\CreateResponse;
use Barsam\Organization\Messages\DeleteResponse;
use Barsam\Organization\Messages\GetResponse;
use Barsam\Organization\Messages\GetUsersResponse;
use Barsam\Organization\Messages\HasUserResponse;
use Barsam\Organization\Messages\RemoveUserResponse;
use Barsam\Organization\Messages\UpdateResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class OrganizationController
{
    public function __construct(private readonly OrganizationService $organizationService)
    {
    }

    #[Route('/api/organization', methods: ['POST'])]
    public function create(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $organizationRequest = OrganizationCreateMapper::fromRequest($input->data->all());

        $organizationResponse = $this->organizationService->Create(
            $organizationRequest,
            CreateResponse::class
        );

        return $this->jsonResponse([
            'id' => $organizationResponse->getResponse()->getId(),
        ]);
    }

    #[Route('/api/organization', methods: ['PUT'])]
    public function update(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $organizationRequest = OrganizationUpdateMapper::fromRequest($input->data->all());

        $organizationResponse = $this->organizationService->Update(
            $organizationRequest,
            UpdateResponse::class
        );

        return $this->jsonResponse([
            'message' => 'updated'
        ]);
    }

    #[Route('/api/organization', methods: ['DELETE'])]
    public function delete(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $organizationRequest = OrganizationDeleteMapper::fromRequest($input->data->all());

        $organizationResponse = $this->organizationService->Delete(
            $organizationRequest,
            DeleteResponse::class
        );

        return $this->jsonResponse([
            'message' => 'deleted'
        ]);
    }

    #[Route('/api/organization', methods: ['GET'])]
    public function get(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $organizationRequest = OrganizationGetMapper::fromRequest($input->data->all());

        $organizationResponse = $this->organizationService->Get(
            $organizationRequest,
            GetResponse::class
        );

        return $this->jsonResponse([
            'organizations' => $organizationResponse->getResponse()->getOrganizations(),
            'total_records' => $organizationResponse->getResponse()->getTotalRecords(),
            'max_page' => $organizationResponse->getResponse()->getMaxPage(),
        ]);
    }

    #[Route('/api/organization/user', methods: ['POST'])]
    public function addUser(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $organizationRequest = OrganizationAddUserMapper::fromRequest($input->data->all());

        $organizationResponse = $this->organizationService->AddUser(
            $organizationRequest,
            AddUserResponse::class
        );

        return $this->jsonResponse([
            'id' => $organizationResponse->getResponse()->getId(),
        ]);
    }

    #[Route('/api/organization/user', methods: ['DELETE'])]
    public function removeUser(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $organizationRequest = OrganizationRemoveUserMapper::fromRequest($input->data->all());

        $organizationResponse = $this->organizationService->RemoveUser(
            $organizationRequest,
            RemoveUserResponse::class
        );

        return $this->jsonResponse([
            'message' => 'deleted'
        ]);
    }

    #[Route('/api/organization/user', methods: ['GET'])]
    public function getUsers(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $organizationRequest = OrganizationGetUsersMapper::fromRequest($input->data->all());

        $organizationResponse = $this->organizationService->GetUsers(
            $organizationRequest,
            GetUsersResponse::class
        );

        return $this->jsonResponse([
            'organization_users' => $organizationResponse->getResponse()->getOrganizationUsers(),
            'total_records' => $organizationResponse->getResponse()->getTotalRecords(),
            'max_page' => $organizationResponse->getResponse()->getMaxPage(),
        ]);
    }

    #[Route('/api/organization/user/exists', methods: ['GET'])]
    public function hasUser(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $organizationRequest = OrganizationHasUserMapper::fromRequest($input->data->all());

        $organizationResponse = $this->organizationService->HasUser(
            $organizationRequest,
            HasUserResponse::class
        );

        return $this->jsonResponse([
            'exists' => $organizationResponse->getResponse()->getExists(),
        ]);
    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
