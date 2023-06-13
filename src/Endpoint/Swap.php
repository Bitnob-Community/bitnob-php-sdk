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
    
    public function getSellBtcSwapQuote($amount): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/initialize-swap-for-usd", [], json_encode(compact('amount'))));
    }

    public function swapBtcToUsd($quoteId): array
    {
        error_log($quoteId);
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/finalize-swap-for-usd", [], json_encode(compact('quoteId'))));
    }


    public function getBuyBtcSwapQuote($amount): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/initialize-swap-for-bitcoin", [], json_encode(compact('amount'))));
    }

    public function swapUsdToBtc($quoteId): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/finalize-swap-for-bitcoin", [], json_encode(compact('quoteId'))));
    }
}
