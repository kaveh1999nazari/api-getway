<?php

namespace App\Utility\GRPC;

use Spiral\RoadRunner\GRPC\Context;
use Spiral\RoadRunnerBridge\GRPC\Interceptor\ServiceClientCore;
use stdClass;
use Throwable;

abstract class AbstractClient
{
    public function __construct(
        private readonly ServiceClientCore $core,
    )
    {
    }

    abstract public function getServiceInterface(): string;

    /**
     * @param string $name
     * @param array $arguments
     * @return Response
     * @throws Throwable
     */
    public function __call(string $name, array $arguments): Response
    {
        $serviceName = constant("{$this->getServiceInterface()}::NAME");

        /** @var stdClass $detail */
        /** @var object $response */
        [$response, $detail] = $this->core->callAction(
            $this->getServiceInterface(),
            '/' . $serviceName . '/' . $name,
            [
                'in' => $arguments[0],
                'responseClass' => $arguments[1],
                'ctx' => new Context($arguments[2] ?? []),
            ],
        );

        return new Response(
            response: $response,
            detail: $detail,
        );
    }

}

