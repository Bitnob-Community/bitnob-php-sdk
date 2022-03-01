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

// $response = $bitnobSdk->wallets()->getAll();
// $response = $bitnobSdk->wallets()->sendBitcoin(50000, 'bcrt1q7ux9zcfumtrvtt6wa9xqnfauxe4n86dj274c7g', 'test@gmail.com');

// $response = $bitnobSdk->checkout()->getAll($page);
// $response = $bitnobSdk->checkout()->getCheckout('339e17ba-695d-467b-9162-db9c6e4401cb');
// $response = $bitnobSdk->checkout()->getStatus('339e17ba-695d-467b-9162-db9c6e4401cdb');
// $response = $bitnobSdk->checkout()->create(10000);
// $response = $bitnobSdk->checkout()->create('82f0ea8a-448a-44d3-893a-fc9ac9b19c3d', 'gidkom@gmail.com');
// $response = $bitnobSdk->swap()->swapBtcToUsd(5.0);
$response = $bitnobSdk->swap()->swapUsdToBtc(5.0);
 
 
var_dump($response);
