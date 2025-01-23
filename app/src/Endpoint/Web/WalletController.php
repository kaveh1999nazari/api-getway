<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\Backup\WalletGetTransactionsMapper;
use App\Service\WalletService;
use App\Utility\GoogleTimeHelper;
use App\Utility\GRPC\Response;
use Barsam\Wallet\Messages\GetTransactionsResponse;
use DateTimeInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class WalletController
{
    public function __construct(
        private readonly WalletService $walletService,
    )
    {
    }

    #[Route('/transactions', name: 'wallet.transactions', methods: ['GET'], group: 'api_auth')]
    public function get(InputManager $input): array
    {
        $walletRequest = WalletGetTransactionsMapper::fromRequest($input->query->all());

        /** @var Response<GetTransactionsResponse> $walletResponse */
        $walletResponse = $this->walletService->GetTransactions(
            $walletRequest,
            GetTransactionsResponse::class
        );

        dump($walletResponse->getResponse());

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
//                'caused_by_id' => $transaction->getCausedById(),
//                'caused_by_name' => $transaction->getCausedByName(),
//                'reference_number' => $transaction->getReferenceNumber(),
//                'created_at' => GoogleTimeHelper::timestampToDateTimeImmutable($transaction->getCreatedAt())->format(DateTimeInterface::ATOM),
//            ];
//        }

        return [
//            'data' => $transactionsArray,
//            'max_page' => $walletResponse->getResponse()->getMaxPage(),
//            'total_records' => $walletResponse->getResponse()->getTotalRecords(),
        ];
    }

}
