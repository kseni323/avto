<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Car;

class BookingController extends Controller
{
    public function storeBooking(Request $request)
    {
        // Валидация данных
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'pickup_location' => 'required|string|max:255',
            'return_location' => 'required|string|max:255',
            'pickup_date' => 'required|date|after_or_equal:today',
            'return_date' => 'required|date|after:pickup_date',
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email',
        ]);

        // Проверка, чтобы автомобиль не был забронирован на те же даты
        $isBooked = Booking::where('car_id', $request->car_id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('pickup_date', [$request->pickup_date, $request->return_date])
                      ->orWhereBetween('return_date', [$request->pickup_date, $request->return_date])
                      ->orWhere(function ($q) use ($request) {
                          $q->where('pickup_date', '<=', $request->pickup_date)
                            ->where('return_date', '>=', $request->return_date);
                      });
            })
            ->exists();

        if ($isBooked) {
            return redirect()->back()->withErrors(['car_id' => 'Данная модель на выбранные даты уже занята.']);
        }

        // Сохранение бронирования в базе
        Booking::create([
            'car_id' => $request->car_id,
            'pickup_location' => $request->pickup_location,
            'return_location' => $request->return_location,
            'pickup_date' => $request->pickup_date,
            'return_date' => $request->return_date,
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'status' => 'не оплачен', // Статус по умолчанию
        ]);

        return redirect()->back()->with('success', 'Бронирование успешно создано!');
    }
}