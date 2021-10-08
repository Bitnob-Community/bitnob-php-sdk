# BITNOB PHP SDK
A PHP sdk to interact with bitnob's API

## Installation  

### With Composer

`composer require bitnob/bitnob-php-sdk`

## REQUIREMENTS
- PHP 7.4+

## Usage
### Authentication
Generate an API KEY from the <a href="https://app.bitnob.co" target="_blank">Bitnob dashboard</a>

### Setup

```
<?php
include "vendor/autoload.php";

use Bitnob\Client\Options;
use Bitnob\Client\BitnobSdk;

$env = 'production'; or // sandbox
$apikey = 'sk.8fcdc.a23474b7d2612534df';

$options = new Options($env);
$bitnobSdk = new BitnobSdk($apikey, $options);
```