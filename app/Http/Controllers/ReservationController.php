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
    $data = $request->validate([
        'pickup_location' => 'required|string',
        'return_location' => 'required|string',
        'pickup_date' => 'required|date',
        'return_date' => 'required|date|after:pickup_date',
        'car_model' => 'required|string'
    ]);

    // Сохранение бронирования
    $reservation = Reservation::create([
        'pickup_location' => $data['pickup_location'],
        'return_location' => $data['return_location'],
        'pickup_date' => $data['pickup_date'],
        'return_date' => $data['return_date'],
        'car_model' => $data['car_model']
    ]);

    // Поиск автомобиля по модели
    $car = Car::where('name', $data['car_model'])->firstOrFail();

    // Перенаправление на страницу show для автомобиля с данными бронирования
    return redirect()->route('cars.show', ['car' => $car->id])
                     ->with('reservationData', $data); // Передача данных бронирования
}
}
