<?php

declare(strict_types=1);

namespace Bitnob\Client\Endpoint;

use Bitnob\Client\HttpClient\Message\ResponseMediator;
use Bitnob\Client\BitnobSdk;

final class CheckoutTemplates
{
    private BitnobSdk $sdk;
    private string $baseUri;

    public function __construct(BitnobSdk $sdk)
    {
        $this->sdk = $sdk;
        $this->baseUri = '/checkout-templates';
    }

    public function list(int $page = 1): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri?page=$page"));
    }

    public function create(array $data): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post($this->baseUri, [], json_encode($data)));
    }

    public function getTemplate(string $id): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/$id"));
    }

    public function addContribution(string $id, int $satoshis): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post("$this->baseUri/$id/contribute", [], json_encode(compact('satoshis'))));
    }

    public function geContributionForTemplate(string $id, int $page = 1): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri/for-template/$id?page=$page"));
    }

    public function listContributions(int $page = 1): array
    {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get("$this->baseUri?page=$page"));
    }
}
