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
            'host' => '172.20.8.29:9003'
        ],
        'loan' => [
            'class' => \App\Service\LoanService::class,
            'host' => '172.20.8.29:9004'
        ],
        'notification' => [
            'class' => \App\Service\NotificationService::class,
            'host' => '172.20.8.90:9005'
        ],
        'ticket' => [
            'class' => \App\Service\TicketService::class,
            'host' => '172.20.8.90:9008'
        ],
        'wallet' => [
            'class' => \App\Service\WalletService::class,
            'host' => '172.20.8.90:9009'
        ],
        'cpg' => [
            'class' => \App\Service\CpgService::class,
            'host' => '172.20.8.90:90010'
        ],
        'organization' => [
            'class' => \App\Service\OrganizationService::class,
            'host' => '172.20.8.90:90011'
        ],
        'otp' => [
            'class' => \App\Service\OtpService::class,
            'host' => '172.20.8.90:90012'
        ],
    ]
];
