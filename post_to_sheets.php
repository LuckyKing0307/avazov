<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require 'vendor/autoload.php';
use Google\Client;
$file = file_get_contents('keys.json');
var_dump($file);
define('SERVICE_ACCOUNT_JSON', 'keys.json');

$client = new Client();
$client->setAuthConfig(SERVICE_ACCOUNT_JSON);
$client->setScopes(['https://www.googleapis.com/auth/spreadsheets.readonly']);

try {
    $client->fetchAccessTokenWithAssertion();
    echo "Авторизация прошла успешно!";
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage();
}
