<?php

require 'vendor/autoload.php';

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

use App\Utils\Helper;

$myHelper = new Helper();

echo $myHelper->message();