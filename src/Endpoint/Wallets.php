<?php

declare(strict_types=1);

namespace Bitnob\Client\Endpoint;

use Bitnob\Client\HttpClient\Message\ResponseMediator;
use Bitnob\Client\BitnobSdk;

final class Wallets
{
    private BitnobSdk $sdk;
    private string $baseUri;

    public function __construct(BitnobSdk $sdk)
    {
        $this->sdk = $sdk;
        $this->baseUri = '/wallets';
    }

    public function getAll(): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get($this->baseUri));
    }

    public function sendBitcoin(float $satoshis, string $address, string $customerEmail, string $description = '', string $priorityLevel = 'regular'): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/send_bitcoin", [],
                json_encode(compact('satoshis', 'address', 'customerEmail', 'description', 'priorityLevel'))));
    }

    public function createInvoice(float $tokens, string $customerEmail, string $description): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/ln/createinvoice", [],
                json_encode(compact('tokens', 'customerEmail', 'description'))));
    }

    public function getInvoice(string $id): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/ln/getinvoice", [], json_encode(compact('id'))));
    }

    public function decodePaymentRequest(string $initiatepayment): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/ln/decodepaymentrequest", [], json_encode(compact('request'))));
    }

    public function initiatePayment(string $request): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/ln/initiatepayment", [], json_encode(compact('request'))));
    }

    public function payInvoice(string $request, string $reference): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/ln/pay", [],
                json_encode(compact('request', 'reference'))));
    }

    public function probeForRoute(string $request): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/ln/proberoute", [],
                json_encode(compact('request'))));
    }

    public function sendUsdc(float $amount, string $address, string $chain, string $customerEmail, string $description): array {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/send-usdc", [],
                json_encode(compact('amount', 'address', 'description', 'chain', 'customerEmail'))));
    }

    public function sendUsdt(float $amount, string $address, string $chain, string $customerEmail, string $description): array {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/send-usdt", [],
                json_encode(compact('amount', 'address', 'description', 'chain', 'customerEmail'))));
    }

}