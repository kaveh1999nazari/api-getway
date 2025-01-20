<?php
$serviceIp = '172.20.8.53';
return [
    'services' => [
        'config' => [
            'class' => \App\Service\ConfigService::class,
            'host' => $serviceIp . ':50001',
        ],
        'installment' => [
            'class' => \App\Service\InstallmentService::class,
            'host' => $serviceIp . ':50002'
        ],
        'loan' => [
            'class' => \App\Service\LoanService::class,
            'host' => $serviceIp . ':50003'
        ],
        'notification' => [
            'class' => \App\Service\NotificationService::class,
            'host' => $serviceIp . ':50004'
        ],
        'ticket' => [
            'class' => \App\Service\TicketService::class,
            'host' => $serviceIp . ':50005'
        ],
        'user' => [
            'class' => \App\Service\UserService::class,
            'host' => $serviceIp . ':50006',
        ],
        'wallet' => [
            'class' => \App\Service\WalletService::class,
            'host' => $serviceIp . ':50007'
        ],
        'organization' => [
            'class' => \App\Service\OrganizationService::class,
            'host' => $serviceIp . ':50008'
        ],
        'shop' => [
            'class' => \App\Service\ShopService::class,
            'host' => $serviceIp . ':50009'
        ],
        'auth' => [
            'class' => \App\Service\AuthService::class,
            'host' => $serviceIp . ':50010',
        ],
        'inquiry' => [
            'class' => \App\Service\InquiryService::class,
            'host' => $serviceIp . ':50011',
        ],
        'cpg' => [
            'class' => \App\Service\CpgService::class,
            'host' => $serviceIp . ':50012'
        ],
        'payment' => [
            'class' => \App\Service\PaymentService::class,
            'host' => $serviceIp . ':50013'
        ],
//        'otp' => [
//            'class' => \App\Service\OtpService::class,
//            'host' => '172.20.8.90:90012'
//        ],
    ]
];
