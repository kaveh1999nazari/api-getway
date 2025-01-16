<?php
return [
    'services' => [
        'user' => [
            'class' => \App\Service\UserService::class,
            'host' => '172.20.8.29:9001',
        ],
        'auth' => [
            'class' => \App\Service\AuthService::class,
            'host' => '172.20.8.29:9002',
        ],
        'config' => [
            'class' => \App\Service\ConfigService::class,
            'host' => '172.20.8.29:9003',
        ],
        'inquiry' => [
            'class' => \App\Service\InquiryService::class,
            'host' => '172.20.8.29:9004',
        ],
        'installment' => [
            'class' => \App\Service\InstallmentService::class,
            'host' => '172.20.8.29:9005'
        ]
    ]
];
