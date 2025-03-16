<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require 'vendor/autoload.php';
use Google\Client;
define('SERVICE_ACCOUNT_JSON', 'keys.json');

$file = file_get_contents('keys.json');
var_dump($file);
var_dump(json_decode($file,1));
