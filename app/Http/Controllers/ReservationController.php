<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Reservation;
class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'pickup_location' => 'required|string',
            'return_location' => 'required|string',
            'pickup_date' => 'required|date',
            'return_date' => 'required|date|after:pickup_date',
            'car_type' => 'required|string'
        ]);

        // Создание новой записи бронирования
        Reservation::create([
            'pickup_location' => $request->pickup_location,
            'return_location' => $request->return_location,
            'pickup_date' => $request->pickup_date,
            'return_date' => $request->return_date,
            'car_type' => $request->car_type
        ]);

        // Сообщение об успешном бронировании
        return back()->with('success', 'Ваше бронирование подтверждено!');
    }
    public function reservation(Request $request)
    {
        // Сохранение данных с первой формы (pickup location, return location, даты, тип автомобиля)
        $reservation = new Reservation();
        $reservation->pickup_location = $request->pickup_location;
        $reservation->return_location = $request->return_location;
        $reservation->pickup_date = $request->pickup_date;
        $reservation->return_date = $request->return_date;
        $reservation->car_type = $request->car_type;
        $reservation->save();

        // Найдите автомобиль, чтобы перенаправить на его страницу
        $car = Car::where('title', $request->car_type)->first();

        return redirect()->route('cars.show', ['car' => $car->id])
            ->with('reservation_id', $reservation->id); // Передача ID резервации
    }

    public function confirm(Request $request)
{
    $reservation = Reservation::find($request->reservation_id);
    $reservation->name = $request->name;
    $reservation->email = $request->email;
    $reservation->save();

    // Отправка письма с подтверждением бронирования
    Mail::to($reservation->email)->send(new ReservationConfirmed($reservation));

    return redirect()->back()->with('message', 'Бронирование успешно подтверждено. Все детали будут отправлены на вашу почту.');
}
}
