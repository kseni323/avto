<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['EMAIL'])) {
    $email = $_POST['EMAIL'];
    $apiKey = '6tark6sni3e64ophd3r5fkampmfosuykio5x93mo'; // Ваш API ключ
    $listId = '1'; // ID вашего списка

    // URL для добавления контакта
    $url = "https://api.unisender.com/ru/api/subscribe?format=json";

    // Данные для отправки
    $data = [
        'api_key' => $apiKey,
        'list_ids' => $listId,
        'fields[email]' => $email,
    ];

    // Инициализация cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // Выполнение запроса
    $response = curl_exec($ch);
    curl_close($ch);

    // Обработка ответа
    $responseData = json_decode($response, true);

    if (isset($responseData['result']) && $responseData['result'] == 'ok') {
        echo "Вы успешно подписались!";
    } else {
        echo "Ошибка при подписке. Попробуйте еще раз.";
    }
}
?>
