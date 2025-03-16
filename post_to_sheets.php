<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require 'vendor/autoload.php';
use Google\Client;
define('SERVICE_ACCOUNT_JSON', 'keys.json');

$file = json_decode(file_get_contents('keys.json'),1);
var_dump(file_get_contents('keys.json'));
$client = new Client();

try {
    $client->setAuthConfig(SERVICE_ACCOUNT_JSON);
    $client->setScopes(['https://www.googleapis.com/auth/spreadsheets.readonly']);
    $client->fetchAccessTokenWithAssertion();
    echo "✅ Авторизация прошла успешно!";
} catch (Exception $e) {
    echo "❌ Ошибка: " . $e->getMessage();
}
