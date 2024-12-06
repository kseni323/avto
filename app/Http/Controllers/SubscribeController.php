<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function subscribe(Request $request)
    {
        // Получаем email из формы
        $email = $request->input('email');

        // Ваш API ключ Unisender
        $apiKey = '6tark6sni3e64ophd3r5fkampmfosuykio5x93mo';

        // URL для добавления контакта
        $url = 'https://api.unisender.com/ru/api/subscribe?api_key=' . $apiKey;

        // Параметры для запроса
        $data = [
            'email' => $email,
            'list_ids' => '1', // ID списка Unisender, в который добавляется подписчик
        ];

        // Отправляем POST-запрос в Unisender
        $response = $this->sendPostRequest($url, $data);

        $response = json_decode($response);
dd($response);  // Выводит весь ответ

        // Обрабатываем ответ от Unisender
        if ($response && $response->status === 'OK') {
            return back()->with('success', 'Вы успешно подписались на рассылку!');
        } else {
            return back()->with('error', 'Произошла ошибка. Попробуйте позже.');
        }
    }

    // Функция для отправки POST-запроса
    private function sendPostRequest($url, $data)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->post($url, [
            'form_params' => $data
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
