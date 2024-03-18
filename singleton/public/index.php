<?php

use App\Config;
require('../vendor/autoload.php');

$appConfig = AppConfig::getInstance();

$apiKey = $appConfig->getValue('apiKey');
echo $apiKey . PHP_EOL;

$appConfig2 = AppConfig::getInstance();
var_dump($appConfig === $appConfig2);
