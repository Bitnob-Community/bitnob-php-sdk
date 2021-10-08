<?php

declare(strict_types=1);

namespace Bitnob\Client\Endpoint;

use Bitnob\Client\HttpClient\Message\ResponseMediator;
use Bitnob\Client\BitnobSdk;

final class Customers
{
    private BitnobSdk $sdk;
    private string $baseUri;

    public function __construct(BitnobSdk $sdk)
    {
        $this->sdk = $sdk;
        $this->baseUri = '/customers';
    }

    public function getAll(int $page = 1): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri?page=$page"));
    }

    public function getById(string $customerId): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/$customerId"));
    }

    public function getByEmail(string $email): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/fetch_customer", [], json_encode(compact('email'))));
    }

    public function createCustomer(array $params): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post($this->baseUri, [], json_encode($params)));
    }

}