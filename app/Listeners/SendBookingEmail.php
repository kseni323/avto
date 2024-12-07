<?php

namespace App\Listeners;

use App\Events\BookingCreated;
use Unisender\ApiWrapper\UnisenderApi;

class SendBookingEmail
{
    public function __construct()
    {
        // Можно добавить зависимость, если нужно
    }

    public function handle(BookingCreated $event)
    {
        $booking = $event->booking;

        // Данные для отправки письма
        $userData = [
            'Имя' => $booking->user->name,
            'Дата' => $booking->date,
            'Место' => $booking->location,
            'Стоимость' => $booking->price,
            'Автомобиль' => $booking->car->model,
            'Ссылка_на_оплату' => route('payment', ['id' => $booking->id]),
        ];

        // Инициализация API UniSender
        $api = new UnisenderApi('6ndpzpnzxmu3wc947cduunc5urp1dptuz8a8xany');

        // Отправка письма
        $api->sendEmail([
            'email' => $booking->user->email,
            'sender_name' => 'Ваша компания',
            'sender_email' => 'info@yourcompany.com',
            'subject' => 'Оплата бронирования',
            'body' => 'Ваш шаблон с переменными',
            'list_id' => 'ID вашего списка рассылки',
            'custom_fields' => $userData,
        ]);
    }
}