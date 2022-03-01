<?php

declare(strict_types=1);

namespace Bitnob\Client\Endpoint;

use Bitnob\Client\HttpClient\Message\ResponseMediator;
use Bitnob\Client\BitnobSdk;

final class Checkout
{
    private BitnobSdk $sdk;
    private string $baseUri;

    public function __construct(BitnobSdk $sdk)
    {
        $this->sdk = $sdk;
        $this->baseUri = '/checkout';
    }

    public function getAll(int $page = 1): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri?page=$page"));
    }
    
    public function getCheckout(string $id): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/info/$id"));
    }

    public function getStatus(string $id): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/status/$id"));
    }

    public function create($satoshis): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post($this->baseUri, [], json_encode(compact('satoshis'))));
    }
}
