<?php

declare(strict_types=1);

namespace App\Application\Config;

use Grpc\ChannelCredentials;
use Spiral\Core\InjectableConfig;

class GrpcClientConfig extends InjectableConfig
{
    public const CONFIG = 'grpcClient';

    /** @var array<class-string, array{host: string, credentials?: mixed}> */
    protected array $config = ['services' => []];

    public function getDefaultCredentials(): mixed
    {
        return ChannelCredentials::createInsecure();
    }

    public function getInterceptors(): array
    {
        return $this->config['interceptors'];
    }

    /**
     * Get service definition.
     * @return array{host: string, credentials?: mixed, class: string}
     */
    public function getService(string $name): array
    {
        return $this->config['services'][$name] ?? [
            'host' => 'localhost'
        ];
    }

    public function getServices(): array
    {
        return $this->config['services'];
    }
}
