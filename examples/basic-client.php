<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Bitnob\Client\Options;
use Bitnob\Client\BitnobSdk;


$env = 'dev';
$apikey = 'sk.6eebc.a8d71e128db960023ca1262d9e';

$options = new Options($env);
$bitnobSdk = new BitnobSdk($apikey, $options);

$page = 1;
// $response = $bitnobSdk->transactions()->getAll($page);
// $response = $bitnobSdk->transactions()->getById('b692e845-b526-4d9e-8bc1-db2153f3134e');
// $response = $bitnobSdk->transactions()->getByReference('64fac94ae891');

// $response = $bitnobSdk->customers()->getAll($page);
// $response = $bitnobSdk->customers()->getById('a8120a9b-50c6-4ebf-a66e-c58c67e6a3ae');
// $response = $bitnobSdk->customers()->getByEmail('goat@bitnob.com');
// $response = $bitnobSdk->customers()->createCustomer([
//     "email" => "berlin@bitnob.com",
//     "firstName" => "Bernard",
//     "lastName" => "Berlin",
//     "phone" => "8048029480",
//     "countryCode" => "+234"
// ]);

// $response = $bitnobSdk->addresses()->getAll(2);
// $response = $bitnobSdk->addresses()->generate('berlin@gmail.com');
// $response = $bitnobSdk->addresses()->getAddressDetails('bcrt1q7ux9zcfumtrvtt6wa9xqnfauxe4n86dj274c7g');
// $response = $bitnobSdk->addresses()->validateAddress('bcrt1q7ux9zcfumtrvtt6wa9xqnfauxe4n86dj274c7g');
// $response = $bitnobSdk->addresses()->generateUsdcAddress('TRX', 'berlin@gmail.com');
// $response = $bitnobSdk->addresses()->generateUsdtAddress('TRX', 'berlin@gmail.com');

// $response = $bitnobSdk->wallets()->getAll();
// $response = $bitnobSdk->wallets()->sendBitcoin(50000, 'bcrt1q7ux9zcfumtrvtt6wa9xqnfauxe4n86dj274c7g', 'test@gmail.com');

// $response = $bitnobSdk->checkout()->getAll($page);
// $response = $bitnobSdk->checkout()->getCheckout('339e17ba-695d-467b-9162-db9c6e4401cb');
// $response = $bitnobSdk->checkout()->getStatus('339e17ba-695d-467b-9162-db9c6e4401cdb');
// $response = $bitnobSdk->checkout()->create(10000);
// $response = $bitnobSdk->checkout()->create('82f0ea8a-448a-44d3-893a-fc9ac9b19c3d', 'gidkom@gmail.com');
// $response = $bitnobSdk->swap()->swapBtcToUsd(5.0);
// $response = $bitnobSdk->swap()->swapUsdToBtc(5.0);

// $response = $bitnobSdk->virtualCards()->list($page);
// $response = $bitnobSdk->virtualCards()->getCard('03b3d845-79e8-4339-8981-42730e9eb924');
// $response = $bitnobSdk->virtualCards()->listCardUsers();
// $response = $bitnobSdk->virtualCards()->getCardUser('d736f2e1-07e7-4fa8-83f5-8747bad66a1d');
// $response = $bitnobSdk->virtualCards()->listTransactions();
// $response = $bitnobSdk->virtualCards()->listCardTransactions('03b3d845-79e8-4339-8981-42730e9eb924', 1);
 
// $response = $bitnobSdk->virtualCards()->registerUser([
//     'firstName' => 'Miles',
//     'customerEmail' => 'miles@gmail.com',
//     "idNumber" => "00000000000",
//     "idType" => "BVN",
//     "lastName" => "Ayorinde",
//     "phoneNumber" => "+234xxxxxxxxxx",
//     "city" => "Ikeja",
//     "state" => "Lagos",
//     "country" => "Nigeria",
//     "zipCode" => "00234",
//     "line1" => "No Street Name"
// ]);

// $response = $bitnobSdk->virtualCards()->createCard('miles@gmail.com');
// $response = $bitnobSdk->virtualCards()->topUpCard(1000, '03b3d845-79e8-4339-8981-42730e9eb924');
// $response = $bitnobSdk->virtualCards()->withdraw(500, '82f0ea8a-448a-44d3-893a-fc9ac9b19c3d');
// $response = $bitnobSdk->virtualCards()->freezeCard('03b3d845-79e8-4339-8981-42730e9eb924');
// $response = $bitnobSdk->virtualCards()->unFreezeCard('82f0ea8a-448a-44d3-893a-fc9ac9b19c3d');
 

// $response = $bitnobSdk->exchangeRates()->allRates();
// $response = $bitnobSdk->exchangeRates()->allP2PRates();
// $response = $bitnobSdk->exchangeRates()->p2PRatesByCurrency('ngn');
// $response = $bitnobSdk->exchangeRates()->rateByCurrency('ghs');
// $response = $bitnobSdk->exchangeRates()->convertCurrency(24, 'USD_BTC');

// $response = $bitnobSdk->checkoutTemplates()->list();
// $response = $bitnobSdk->checkoutTemplates()->getTemplate('462c52e7-03e3-4161-8df6-fb93c92ac683');

// $response = $bitnobSdk->wallets()->sendUsdc(100, '0x40bd5ed61da592e1ecb67ad4288e632bb757e52f', 'TRX', 'berlin@gmail.com', 'send money');
// $response = $bitnobSdk->wallets()->sendUsdt(100, '0x40bd5ed61da592e1ecb67ad4288e632bb757e52f', 'TRX', 'berlin@gmail.com', 'send money');

var_dump($response);
