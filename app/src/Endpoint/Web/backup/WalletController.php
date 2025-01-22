<?php

namespace App\Endpoint\Web\backup;

use App\Domain\Mapper\Backup\WalletCreateMapper;
use App\Domain\Mapper\Backup\WalletDepositMapper;
use App\Domain\Mapper\Backup\WalletGetMapper;
use App\Domain\Mapper\Backup\WalletGetTransactionsMapper;
use App\Domain\Mapper\Backup\WalletWithdrawMapper;
use App\Service\WalletService;
use Barsam\Wallet\Messages\CreateResponse;
use Barsam\Wallet\Messages\DepositResponse;
use Barsam\Wallet\Messages\GetResponse;
use Barsam\Wallet\Messages\GetTransactionsResponse;
use Barsam\Wallet\Messages\WithdrawResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class WalletController
{
    public function __construct(private readonly WalletService $walletService)
    {
    }

    #[Route('/api/wallet', methods: ['POST'])]
    public function create(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $walletRequest = WalletCreateMapper::fromRequest($input->data->all());

        $walletResponse = $this->walletService->Create(
            $walletRequest,
            CreateResponse::class
        );

        return $this->jsonResponse([
            'wallet_id' => $walletResponse->getResponse()->getWalletId()
        ]);
    }

    #[Route('/api/wallet', methods: ['GET'])]
    public function get(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $walletRequest = WalletGetMapper::fromRequest($input->data->all());

        $walletResponse = $this->walletService->Get(
            $walletRequest,
            GetResponse::class
        );

        $wallet = $walletResponse->getResponse()->getWallet();
        $walletArray = [
            'id' => $wallet->getId(),
            'owner_id' => $wallet->getOwnerId(),
            'currency_id' => $wallet->getCurrencyId(),
            'type' => $wallet->getType(),
            'balance_available' => $wallet->getBalanceAvailable(),
            'balance_locked' => $wallet->getBalanceLocked(),
            'balance_total' => $wallet->getBalanceTotal(),
            'address' => $wallet->getAddress(),
        ];

        return $this->jsonResponse([
            'wallet' => $walletArray
        ]);
    }


    #[Route('/api/wallet/deposit', methods: ['POST'])]
    public function deposit(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $walletRequest = WalletDepositMapper::fromRequest($input->data->all());

        $walletResponse = $this->walletService->Deposit(
            $walletRequest,
            DepositResponse::class
        );

        return $this->jsonResponse([
            'new_balance' => $walletResponse->getResponse()->getNewBalance()
        ]);
    }

    #[Route('/api/wallet/withdraw', methods: ['POST'])]
    public function withdraw(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $walletRequest = WalletWithdrawMapper::fromRequest($input->data->all());

        $walletResponse = $this->walletService->Withdraw(
            $walletRequest,
            WithdrawResponse::class
        );

        return $this->jsonResponse([
            'new_balance' => $walletResponse->getResponse()->getNewBalance()
        ]);
    }

//    #[Route('/api/wallet/transaction', methods: ['GET'])]
//    public function getTransactions(ServerRequestInterface $request, InputManager $input): ResponseInterface
//    {
//        $walletRequest = WalletGetTransactionsMapper::fromRequest($input->data->all());
//
//        $walletResponse = $this->walletService->GetTransactions(
//            $walletRequest,
//            GetTransactionsResponse::class
//        );
//
//        $transactions = $walletResponse->getResponse()->getTransactions();
//        $transactionsArray = [];
//        foreach ($transactions as $transaction) {
//            $transactionsArray[] = [
//                'id' => $transaction->getId(),
//                'wallet_id' => $transaction->getWalletId(),
//                'type' => $transaction->getType(),
//                'amount' => $transaction->getAmount(),
//                'description' => $transaction->getDescription(),
//                'status' => $transaction->getStatus(),
//                'created_at' => [
//                    'seconds' => $transaction->getCreatedAt()->getSeconds(),
//                    'nanos' => $transaction->getCreatedAt()->getNanos(),
//                ],
//                'caused_by_id' => $transaction->getCausedById(),
//                'caused_by_name' => $transaction->getCausedByName(),
//                'reference_number' => $transaction->getReferenceNumber(),
//            ];
//        }
//
//        return $this->jsonResponse([
//            'transactions' => $transactionsArray,
//            'max_page' => $walletResponse->getResponse()->getMaxPage(),
//            'total_records' => $walletResponse->getResponse()->getTotalRecords(),
//        ]);
//    }


    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }

}
