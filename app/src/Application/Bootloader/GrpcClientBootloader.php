<?php

declare(strict_types=1);

namespace App\Application\Bootloader;

use App\Application\Config\GrpcClientConfig;
use App\Service\UserService;
use App\Utility\GRPC\AbstractClient;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Core\Container;
use Spiral\RoadRunnerBridge\GRPC\Interceptor\ServiceClientCore;

class GrpcClientBootloader extends Bootloader
{
    public function boot(Container $container, GrpcClientConfig $config): void
    {
        foreach ($config->getServices() as  $service) {
            $container->bindSingleton(
                UserService::class,
                static function (GrpcClientConfig $config) use ($container, $service): AbstractClient {
                    $serviceClientCore = new ServiceClientCore(
                        $service['host'],
                        ['credentials' => $service['credentials'] ?? $config->getDefaultCredentials()]
                    );

                    return $container->make($service['class'], [
                        'core' => $serviceClientCore
                    ]);
                }
            );
        }
    }

}
