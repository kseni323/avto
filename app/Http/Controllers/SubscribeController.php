<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubscribeController extends Controller
{
    public function subscribe(Request $request)
    {
        $apiKey = '6ndpzpnzxmu3wc947cduunc5urp1dptuz8a8xany'; // Замените на ваш ключ UniSender
        $listId = '1'; // Укажите ID списка контактов

        $email = $request->input('email'); // Получаем email из формы

        // URL для подписки
        $url = 'https://api.unisender.com/ru/api/subscribe?api_key=' . $apiKey;

        // Данные для отправки
        $data = [
            'fields[email]' => $email, // Email подписчика
            'list_ids' => $listId, // ID списка
            'double_optin' => 3, // Уровень подтверждения: 3 — нет подтверждения
        ];

        // Выполняем запрос к API
        $response = Http::asForm()->post($url, $data);

        // Декодируем ответ
        $response = json_decode($response);

        // Проверяем статус ответа
        if (isset($response->result)) {
            return response()->json(['message' => 'Подписка успешна!'], 200);
        } else {
            // Выводим ошибку, если она есть
            return response()->json([
                'message' => 'Ошибка подписки: ' . ($response->error ?? 'Неизвестная ошибка')
            ], 400);
        }
    }
}