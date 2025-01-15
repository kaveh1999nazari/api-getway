<?php
return [
    'services' => [
        'user' => [
            'class' => \App\Service\UserService::class,
            'host' => '192.168.1.118:9001',
        ],
        'auth' => [
            'class' => \App\Service\AuthService::class,
            'host' => '192.168.1.118:9002',
        ]
    ]
];
