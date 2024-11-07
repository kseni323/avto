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
    $validatedData = $request->validate([
        'pickup_location' => 'required|string',
        'return_location' => 'required|string',
        'pickup_date' => 'required|date',
        'return_date' => 'required|date|after:pickup_date',
        'car_model' => 'required|string',
        'user_name' => 'required|string',
        'user_email' => 'required|email',
    ]);

    // Создание новой записи бронирования
    Reservation::create([
        'pickup_location' => $validatedData['pickup_location'],
        'return_location' => $validatedData['return_location'],
        'pickup_date' => $validatedData['pickup_date'],
        'return_date' => $validatedData['return_date'],
        'car_model' => $validatedData['car_model'],
        'user_name' => $validatedData['user_name'],
        'user_email' => $validatedData['user_email'],
    ]);

    // Сообщение об успешном бронировании
    return redirect()->back()->with('success', 'Бронирование успешно создано!');
}

}

