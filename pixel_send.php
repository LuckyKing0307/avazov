<?php
if (!isset($_COOKIE['unique'])) {
    setcookie('unique', uniqid(), time() + 7776000, "/"); // 90 дней
}
if (isset($_GET['fbclid'])) {
    $fbclid = $_GET['fbclid'];
    setcookie('_fbc', "fb.1." . time() . ".$fbclid", time() + 7776000, "/"); // 90 дней
}
// Получение Facebook Cookies или данных из POST
function getFacebookCookies()
{
    $fbp = $_POST['fbp'] ?? $_COOKIE['_fbp'] ?? null;
    $fbc = $_POST['fbc'] ?? $_COOKIE['_fbc'] ?? null;

    return [
        'fbc' => $fbc,
        'fbp' => isValidFbp($fbp) ? $fbp : null // Убираем некорректный _fbp
    ];
}

function isValidFbp($fbp)
{
    return preg_match('/^fb\.1\.\d{10}\.\d+$/', $fbp);
}

// Хеширование данных (SHA-256 для Facebook)
function hashData($data)
{
    return $data ? hash('sha256', strtolower(trim($data))) : null;
}

// Функция отправки события в Facebook Conversion API
function sendEventToFacebook($eventName, $eventData)
{
    $id = $_COOKIE["TestCookie"] ?? $_COOKIE["TestCookie"]:: uniqid();
    $accessToken = 'EAANan4Ge8sMBO0BwH4kZC7HbaQ2VXR2CQtstpc7AHn2mX7XrZAHZAdKDDIZAibgW7V9Hs9WcazZBEKxhPJHmXt9hJCe76jiqKVFCgvvovF51pmm5FZB2Qco7xG07jFCm6ZA6K3LGaNAKscLb7qbie68eCg00aomZBIgn72nKZAinxM1DhcHvjpkuPRaQtBefcwI6eHQZDZD';  // 🔹 Замените на свой Access Token
    $pixelId = '1235689174237839';  // 🔹 Замените на свой Pixel ID
    $url = "https://graph.facebook.com/v18.0/$pixelId/events";

    $facebookCookies = getFacebookCookies();
    $srfn = explode(' ',$_POST['name']);
    $name = count($srfn)>1 ? $srfn[0] : $srfn;
    $sur_name = count($srfn)>1 ? $srfn[1] : $srfn;
    // Данные пользователя
    $externalId = $_COOKIE['unique'] ?? uniqid();
    $userData = [
        'client_ip_address' => $_POST['ip'] ?? $_SERVER['REMOTE_ADDR'],
        'client_user_agent' => $_POST['user_agent'] ?? $_SERVER['HTTP_USER_AGENT'],
        'fbc' => $facebookCookies['fbc'],
        'fbp' => $facebookCookies['fbp'],
        'ph' => hashData($_POST['phone'] ?? ''),
        'fn' => hashData($name ?? ''),
        'st' => hashData($sur_name ?? '') ,
        'external_id' => hashData($externalId)
    ];
    // Сборка события
    $data = [
        'data' => [
            [
                'event_time' => time(),  // Время события (в формате Unix timestamp)
                'event_id' => 'lead_' . uniqid(), // Уникальный ID события
                'action_source' => 'website',  // Источник события (сайт)
                'user_data' => $userData,
                'custom_data' => [
                    'form_id' => $id,  // ID формы (например, "Форма обратной связи")
                    'lead_type' => 'webinar_registration', // Тип лида (можно передать "запись на вебинар", "подписка" и т.д.)
                ]
            ]
        ],
        'access_token' => $accessToken,
    ];
    // Отправка запроса
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

// Обработка POST-запросов
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['event'])) {
    $eventName = $_POST['event'];

    $customData = [];
    if ($eventName === 'FormSubmit' || $eventName === 'Lead') {
        $customData = [
            'name' => $_POST['name'] ?? '',
            'phone' => $_POST['phone'] ?? '',
            'field1' => $_POST['field1'] ?? '',
            'field2' => $_POST['field2'] ?? '',
            'field3' => $_POST['field3'] ?? '',
        ];
        $eventName = 'Lead';
    }

    echo sendEventToFacebook($eventName, $customData);
    exit;
}
