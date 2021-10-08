<?php

declare(strict_types=1);

namespace Bitnob\Client\Endpoint;

use Bitnob\Client\HttpClient\Message\ResponseMediator;
use Bitnob\Client\BitnobSdk;

final class Transactions
{
    private Sdk $sdk;
    private string $baseUri;

    public function __construct(BitnobSdk $sdk)
    {
        $this->sdk = $sdk;
        $this->baseUri = '/transactions';
    }

    public function getAll(int $page = 1): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri?page=$page"));
    }


    public function getById(string $id): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/$id"));
    }


    public function getByReference(string $reference): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/fetch_transaction", [], json_encode(['reference' => $reference])));
    }
}