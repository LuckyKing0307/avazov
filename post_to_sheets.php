<?php
require 'vendor/autoload.php';
use Google\Client;

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
