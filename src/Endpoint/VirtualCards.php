<?php

declare(strict_types=1);

namespace Bitnob\Client\Endpoint;

use Bitnob\Client\HttpClient\Message\ResponseMediator;
use Bitnob\Client\BitnobSdk;


final class VirtualCards
{
    private BitnobSdk $sdk;
    private string $baseUri;

    public function __construct(BitnobSdk $sdk)
    {
        $this->sdk = $sdk;
        $this->baseUri = '/virtualcards';
    }

    public function list(int $page = 1): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/cards?page=$page"));
    }

    public function getCard(int $id): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/cards/$id"));
    }

    public function listCardUsers(int $page = 1): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/users"));
    }

    public function getCardUser(string $id): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/users/$id"));
    }


    public function listTransactions(int $page = 1): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/transactions?page=$page"));
    }


    public function listCardTransactions(string $id, int $page = 1): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/cards/$id/transactions?page=$page"));
    }

    public function registerUser(array $data): array
    {
        $requiredData = ['customerEmail', 'idNumber', 'idType', 'firstName', 'lastName', 'city', 'state', 'country', 'zipCode', 'line1'];

        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/registercarduser", [], json_encode($data)));
    }

    public function createCard(string $customerEmail): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/create", [], json_encode(compact('customerEmail'))));
    }

    /**
     * Amount in cents
     */
    public function topUpCard(int $amount, string $cardId): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/topup", [], json_encode(compact('amount', 'cardId'))));
    }

    public function withdraw(int $amount, string $cardId): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/withdraw", [], json_encode(compact('amount', 'cardId'))));
    }

    public function freezeCard(string $cardId): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/freeze", [], json_encode(compact('cardId'))));
    }

    public function unFreezeCard(string $cardId): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/unfreeze", [], json_encode(compact('cardId'))));
    }
}
