<?php

declare(strict_types=1);

namespace Bitnob\Client;

use Bitnob\Client\Endpoint\Customers;
use Bitnob\Client\Endpoint\ExchangeRates;
use Bitnob\Client\Endpoint\Transactions;
use Bitnob\Client\Endpoint\Addresses;
use Bitnob\Client\Endpoint\Wallets;
use Bitnob\Client\Endpoint\Checkout;
use Bitnob\Client\Endpoint\Swap;
use Bitnob\Client\Endpoint\VirtualCards;
use Bitnob\Client\Endpoint\CheckoutTemplates;
use Http\Client\Common\HttpMethodsClientInterface;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;

final class BitnobSdk
{
    private ClientBuilder $clientBuilder;

    public function __construct(string $apikey, Options $options = null)
    {
        $options = $options ?? new Options();

        $this->clientBuilder = $options->getClientBuilder();
        $this->clientBuilder->addPlugin(new BaseUriPlugin($options->getUri()));
        $this->clientBuilder->addPlugin(
            new HeaderDefaultsPlugin(
                [
                    'Authorization' => 'Bearer '.$apikey,
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ]
            )
        );
    }

    public function getHttpClient(): HttpMethodsClientInterface
    {
        return $this->clientBuilder->getHttpClient();
    }


    // Register Customers API
    public function customers(): Customers
    {
        return new Endpoint\Customers($this);
    }

    // Register Transactions API
    public function transactions(): Transactions
    {
        return new Endpoint\Transactions($this);
    }

    // Register Wallets API
    public function wallets(): Wallets
    {
        return new Endpoint\Wallets($this);
    }

    // Register Addresses API
    public function addresses(): Addresses
    {
        return new Endpoint\Addresses($this);
    }

    // Register Checkout API
    public function checkout(): Checkout
    {
        return new Endpoint\Checkout($this);
    }

    // Register Swap API
    public function swap(): Swap
    {
        return new Endpoint\Swap($this);
    }

    // Register Virtual Cards API
    public function virtualCards(): VirtualCards
    {
        return new Endpoint\VirtualCards($this);
    }

    // Register Exchange Rates API
    public function exchangeRates(): ExchangeRates
    {
        return new Endpoint\ExchangeRates($this);
    }

    // Register Checkout Templates API
    public function checkoutTemplates(): CheckoutTemplates
    {
        return new Endpoint\CheckoutTemplates($this);
    }
}