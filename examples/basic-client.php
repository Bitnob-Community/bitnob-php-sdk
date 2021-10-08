<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Bitnob\Client\Options;
use Bitnob\Client\BitnobSdk;


$env = 'dev';
$apikey = 'sk.8fcdc.a23474b7d4612534df';

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
//     "email" => "goat@bitnob.com",
//     "firstName" => "Bernard",
//     "lastName" => "Mandingo",
//     "phone" => "8048029480",
//     "countryCode" => "+234"
// ]);

// $response = $bitnobSdk->addresses()->getAll(2);
// $response = $bitnobSdk->addresses()->generate('gidkom@gmail.com');
// $response = $bitnobSdk->addresses()->getAddressDetails('bcrt1q7ux9zcfumtrvtt6wa9xqnfauxe4n86dj274c7g');
// $response = $bitnobSdk->addresses()->validateAddress('bcrt1q7ux9zcfumtrvtt6wa9xqnfauxe4n86dj274c7g');

// $response = $bitnobSdk->wallets()->getAll();
$response = $bitnobSdk->wallets()->sendBitcoin(50000, 'bcrt1q7ux9zcfumtrvtt6wa9xqnfauxe4n86dj274c7g', 'gidkom@yahoo.co.uk');


var_dump($response);