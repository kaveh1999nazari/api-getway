<?php

namespace App\Utility\GRPC;

use App\Domain\DataTransferObject\UserResponseDTO;
use Spiral\RoadRunner\GRPC\Context;
use Spiral\RoadRunnerBridge\GRPC\Interceptor\ServiceClientCore;
use stdClass;

abstract class BaseClient
{
    public function __construct(
        private readonly ServiceClientCore $core,
    )
    {
    }

    abstract public function getServiceInterface(): string;

    abstract public function getServiceName(): string;

    public function __call(string $name, array $arguments)
    {
        /** @var stdClass $detail */
        /** @var object $response */
        [$response, $detail] = $this->core->callAction(
            $this->getServiceInterface(),
            '/' . $this->getServiceName() . '/' . $name,
            [
                'in' => $arguments[0],
                'responseClass' => $arguments[1],
                'ctx' => new Context($arguments[2] ?? []),
            ],
        );

        return new UserResponseDTO($detail->code, $detail->details);
    }

}

