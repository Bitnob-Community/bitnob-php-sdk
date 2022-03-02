<?php

declare(strict_types=1);

namespace Bitnob\Client\Endpoint;

use Bitnob\Client\HttpClient\Message\ResponseMediator;
use Bitnob\Client\BitnobSdk;

final class ExchangeRates
{
    private BitnobSdk $sdk;
    private string $baseUri;

    public function __construct(BitnobSdk $sdk)
    {
        $this->sdk = $sdk;
        $this->baseUri = '/rates';
    }

    public function allRates(): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/exchange"));
    }

    public function rateByCurrency(string $currency): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/exchange/$currency"));
    }

    public function allP2PRates(): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/p2p"));
    }

    public function p2PRatesByCurrency(string $currency): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/p2p/$currency"));
    }

    public function convertCurrency($amount, string $conversion): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/convert-currency", [], json_encode(compact('amount', 'conversion'))));
    }
}
