<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\CheckCredentialMapper;
use App\Domain\Mapper\CreateUserMapper;
use App\Domain\Mapper\DeleteUserMapper;
use App\Domain\Mapper\FieldCreateMapper;
use App\Domain\Mapper\FieldDeleteMapper;
use App\Domain\Mapper\FieldGetAllMapper;
use App\Domain\Mapper\FieldUpdateMapper;
use App\Domain\Mapper\GetUserMapper;
use App\Domain\Mapper\UpdateUserMapper;
use App\Service\UserService;
use Barsam\User\Messages\CheckCredentialsResponse;
use Barsam\User\Messages\DeleteResponse;
use Barsam\User\Messages\FieldCreateResponse;
use Barsam\User\Messages\FieldDeleteResponse;
use Barsam\User\Messages\FieldGetAllResponse;
use Barsam\User\Messages\FieldUpdateResponse;
use Barsam\User\Messages\GetResponse;
use Barsam\User\Messages\RegisterResponse;
use Barsam\User\Messages\UpdateResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController
{

    public function __construct(private readonly UserService $userService)
    {
    }

    #[Route('/api/profile', methods: ['GET'])]
    public function get(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = GetUserMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->Get(
            $userRequest,
            GetResponse::class
        );

        return $this->jsonResponse([
            'user' => $userResponse->getResponse()->getUser(),
            'user-metas' => $userResponse->getResponse()->getUserMetas(),
        ]);
    }

    #[Route('/api/register', methods: ['POST'])]
    public function create(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = CreateUserMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->Register(
            $userRequest,
            RegisterResponse::class
        );

        return $this->jsonResponse([
            'id' => $userResponse->getResponse()->getUserId()
        ]);
    }

    #[Route('/api/profile', methods: ['PUT'])]
    public function update(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = UpdateUserMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->Update(
            $userRequest,
            UpdateResponse::class
        );

        return $this->jsonResponse([
            'message' => 'User updated successfully',
        ]);
    }

    #[Route('/api/delete', methods: ['DELETE'])]
    public function delete(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = DeleteUserMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->Delete(
            $userRequest,
            DeleteResponse::class
        );

        return $this->jsonResponse([
            'message' => 'User deleted successfully',
        ]);
    }

    #[Route('/api/check', methods: ['POST'])]
    public function checkCredentials(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = CheckCredentialMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->CheckCredentials(
            $userRequest,
            CheckCredentialsResponse::class
        );

        return $this->jsonResponse([
            'valid' => $userResponse->getResponse()->getValid(),
        ]);
    }

    #[Route('/api/field/create', methods: ['POST'])]
    public function fieldCreate(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = FieldCreateMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->FieldCreate(
            $userRequest,
            FieldCreateResponse::class
        );

        return $this->jsonResponse([
            "message" => "created"
        ]);
    }

    #[Route('/api/field/update', methods: ['PUT'])]
    public function fieldUpdate(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = FieldUpdateMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->FieldUpdate(
            $userRequest,
            FieldUpdateResponse::class
        );

        return $this->jsonResponse([
            'message' => "updated"
        ]);
    }

    #[Route('/api/field/delete', methods: ['DELETE'])]
    public function fieldDelete(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = FieldDeleteMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->FieldDelete(
            $userRequest,
            FieldDeleteResponse::class
        );

        return $this->jsonResponse([
            'message' => "deleted"
        ]);

    }

    #[Route('/api/field', methods: ['GET'])]
    public function fieldGetAll(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = FieldGetAllMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->FieldGetAll(
            $userRequest,
            FieldGetAllResponse::class
        );

        return $this->jsonResponse([
            'feilds' => $userResponse->getResponse()->getFeilds(),
        ]);
    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }

}
