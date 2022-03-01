<?php

declare(strict_types=1);

namespace Bitnob\Client\Endpoint;

use Bitnob\Client\HttpClient\Message\ResponseMediator;
use Bitnob\Client\BitnobSdk;

final class Swap
{
    private BitnobSdk $sdk;
    private string $baseUri;

    public function __construct(BitnobSdk $sdk)
    {
        $this->sdk = $sdk;
        $this->baseUri = '/wallets';
    }

    public function swapBtcToUsd($amount): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/swap-bitcoin-usd", [], json_encode(compact('amount'))));
    }

    public function swapUsdToBtc($amount): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/swap-usd-bitcoin", [], json_encode(compact('amount'))));
    }
}
