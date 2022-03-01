<?php

declare(strict_types=1);

namespace Bitnob\Client\Endpoint;

use Bitnob\Client\HttpClient\Message\ResponseMediator;
use Bitnob\Client\BitnobSdk;

final class Addresses
{
    private BitnobSdk $sdk;
    private string $baseUri;

    public function __construct(BitnobSdk $sdk)
    {
        $this->sdk = $sdk;
        $this->baseUri = '/addresses';
    }

    public function getAll(int $page = 1): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri?page=$page"));
    }

    public function generate(string $customerEmail, string $label = ''): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/generate", [], json_encode(compact('customerEmail', 'label'))));
    }

    public function getAddressDetails(string $address): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/fetch/$address"));
    }

    public function validateAddress(string $address): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/validate", [], json_encode(compact('address'))));
    }

    public function generateUsdcAddress(string $chain, string $customerEmail, string $label = ''): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/generate/usdc", [], json_encode(compact('chain', 'customerEmail', 'label'))));
    }

    public function generateUsdtAddress(string $chain, string $customerEmail, string $label = ''): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/generate/usdc", [], json_encode(compact('chain', 'customerEmail', 'label'))));
    }
    
}