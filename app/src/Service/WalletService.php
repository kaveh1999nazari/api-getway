<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Wallet\Messages\CreateRequest;
use Barsam\Wallet\Messages\DepositRequest;
use Barsam\Wallet\Messages\GetRequest;
use Barsam\Wallet\Messages\GetTransactionsRequest;
use Barsam\Wallet\Messages\WithdrawRequest;
use Barsam\Wallet\WalletServiceInterface;

/**
 * @method Create(CreateRequest $request, string $responseClass, array $context = [])
 * @method Get(GetRequest $request, string $responseClass, array $context = [])
 * @method Deposit(DepositRequest $request, string $responseClass, array $context = [])
 * @method Withdraw(WithdrawRequest $request, string $responseClass, array $context = [])
 * @method GetTransactions(GetTransactionsRequest $request, string $responseClass, array $context = [])
 */
class WalletService extends AbstractClient
{

    public function getServiceInterface(): string
    {
        return WalletServiceInterface::class;
    }
}
