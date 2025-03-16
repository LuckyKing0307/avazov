<?php
require 'vendor/autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
use Google\Client;
use Google\Service\Sheets;

define('SPREADSHEET_ID', '1OG8wUkocB4KBgrUhfLL9uF5m9vdrWpZW0E_6Z0AP-Ks'); // Замените на ID вашей Google Sheets
define('SERVICE_ACCOUNT_JSON', '/home/alisher9/public_html/keys.json'); // Путь к JSON-файлу сервисного аккаунта

function writeToGoogleSheets($postData) {
    $client = new Client();
    $client->setAuthConfig(SERVICE_ACCOUNT_JSON);
    $client->setScopes([Sheets::SPREADSHEETS]);

    $service = new Sheets($client);
    $range = 'A1'; // Начальная ячейка
    $values = [[
        $postData['select1'] ?? 'Не указано',
        $postData['select2'] ?? 'Не указано',
        $postData['select3'] ?? 'Не указано',
        $postData['name'] ?? 'Не указано',
        $postData['phone'] ?? 'Не указано'
    ]];

    $body = new Sheets\ValueRange(['values' => $values]);
    $params = ['valueInputOption' => 'RAW'];

    $service->spreadsheets_values->append(SPREADSHEET_ID, $range, $body, $params);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = $_POST;
    if (!empty($postData)) {
        writeToGoogleSheets($postData);
        echo json_encode(['success' => true, 'message' => 'Данные добавлены']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Нет данных']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Только POST-запросы']);
}
?>
