<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Car;

class BookingController extends Controller
{
    public function storeBooking(Request $request)
    {

        \Log::info('StoreBooking Called', $request->all()); // Логирование входящих данных
        // Валидация данных
        $request->validate([
           'car_id' => 'required|exists:cars,id',
            'pickup_location' => 'required|string|max:255',
            'return_location' => 'required|string|max:255',
            'pickup_date' => 'required|date|after_or_equal:today',
            'return_date' => 'required|date|after:pickup_date',
            'user_email' => 'required|email',
        ]);

        // Проверка доступности автомобиля
        if ($this->isCarBooked($request->car_id, $request->pickup_date, $request->return_date)) {
            return redirect()->back()->withErrors(['car_id' => 'Данная модель на выбранные даты уже занята. Выберите другую дату или автомобиль.']);
        }

        // Сохранение бронирования
        Booking::create([
            'car_id' => $request->car_id,
            'pickup_location' => $request->pickup_location,
            'return_location' => $request->return_location,
            'pickup_date' => $request->pickup_date,
            'return_date' => $request->return_date,
            'user_email' => $request->user_email,
            
            'status' => 'не оплачен', // Статус по умолчанию
        ]);

        return redirect()->back()->with('success', 'Бронирование успешно создано!');
    }


    public function showReservationForm()
{
    $cars = Car::all(); // Получаем все данные машин
    return view('home', compact('cars'));
}

    private function isCarBooked($carId, $pickupDate, $returnDate)
    {
        return Booking::where('car_id', $carId)
            ->where(function ($query) use ($pickupDate, $returnDate) {
                $query->whereBetween('pickup_date', [$pickupDate, $returnDate])
                      ->orWhereBetween('return_date', [$pickupDate, $returnDate])
                      ->orWhere(function ($q) use ($pickupDate, $returnDate) {
                          $q->where('pickup_date', '<=', $pickupDate)
                            ->where('return_date', '>=', $returnDate);
                      });
            })
            ->exists();
    }


    
}
