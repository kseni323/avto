<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Car;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    public function showReservationForm()
    {
        $cars = Car::all(); // Получаем все данные машин
        return view('home', compact('cars'));
    }

    public function storeBooking(Request $request)
    {
        Log::info('StoreBooking Called', $request->all()); // Логируем входящие данные

        // Валидация данных
        $validatedData = $this->validateBooking($request);

        // Проверка занятости автомобиля
        if ($this->isCarBooked(
            $validatedData['car_id'], 
            $validatedData['pickup_date'], 
            $validatedData['return_date'], 
            $validatedData['pickup_time'], 
            $validatedData['return_time']
        )) {
            Log::info('Car is already booked.', ['car_id' => $validatedData['car_id']]);
            return response()->json(['message' => 'Данная модель на выбранные даты и время уже занята.'], 409);
        }

        $pickupDateTime = $request->pickup_date . ' ' . $request->pickup_time;
$returnDateTime = $request->return_date . ' ' . $request->return_time;

$hours = (strtotime($returnDateTime) - strtotime($pickupDateTime)) / 3600;
$car = Car::findOrFail($request->car_id);

// Если время больше суток, считаем по суточной цене
$price = $hours >= 24 
    ? ceil($hours / 24) * $car->price
    : $hours * $car->hourly_price;

        // Создание записи бронирования
        Booking::create([
            'car_id' => $validatedData['car_id'],
            'pickup_location' => $validatedData['pickup_location'],
            'return_location' => $validatedData['return_location'],
            'pickup_date' => $validatedData['pickup_date'],
            'return_date' => $validatedData['return_date'],
            'pickup_time' => date('H:00:00', strtotime($request->pickup_time)),
            'return_time' => date('H:00:00', strtotime($request->return_time)),
            'user_email' => $validatedData['user_email'],
            'status' => 'не оплачен',
        ]);

        Log::info('Booking created successfully.', ['car_id' => $validatedData['car_id']]);
        return response()->json(['message' => 'Бронирование успешно создано!'], 200);
    }

    // Валидация данных
    private function validateBooking(Request $request)
    {
        return $request->validate([
            'car_id' => 'required|exists:cars,id',
            'pickup_location' => 'required|string|max:255',
            'return_location' => 'required|string|max:255',
            'pickup_date' => 'required|date|after_or_equal:today',
            'return_date' => 'required|date|after_or_equal:pickup_date',
            'pickup_time' => 'nullable|required_if:pickup_date,'.$request->return_date.'|date_format:H:i',
            'return_time' => 'nullable|required_if:pickup_date,'.$request->return_date.'|date_format:H:i|after:pickup_time',
            'user_email' => 'required|email',
        ]);
    }

    // Проверка занятости автомобиля
    private function isCarBooked($carId, $pickupDate, $returnDate, $pickupTime = null, $returnTime = null)
    {
        return Booking::where('car_id', $carId)
            ->where(function ($query) use ($pickupDate, $returnDate, $pickupTime, $returnTime) {
                $query->where(function ($q) use ($pickupDate, $returnDate, $pickupTime, $returnTime) {
                    $q->where('pickup_date', $pickupDate)
                      ->where('return_date', $returnDate);

                    if ($pickupTime && $returnTime) {
                        $q->where('pickup_time', '<=', $returnTime)
                          ->where('return_time', '>=', $pickupTime);
                    }
                })
                ->orWhereBetween('pickup_date', [$pickupDate, $returnDate])
                ->orWhereBetween('return_date', [$pickupDate, $returnDate])
                ->orWhere(function ($q) use ($pickupDate, $returnDate) {
                    $q->where('pickup_date', '<=', $pickupDate)
                      ->where('return_date', '>=', $returnDate);
                });
            })
            ->exists();
    }

    public function showSearchForm()
    {
        return view('my-booking');
    }

    // Поиск бронирования
    public function findBooking(Request $request)
    {
        $request->validate([
            'user_email' => 'required|user_email'
        ]);

        $bookings = Booking::where('user_email', $request->user_email)->get();

        if ($bookings->isEmpty()) {
            return back()->with('error', 'Бронирования с таким email не найдено.');
        }

        return view('booking-results', ['bookings' => $bookings]);
    }

    // Форма редактирования бронирования
    public function editBooking($id)
    {
        $booking = Booking::findOrFail($id);
        return view('edit-booking', ['booking' => $booking]);
    }

    // Обновление бронирования
    public function updateBooking(Request $request, $id)
    {
        $request->validate([
            'car_model' => 'required|string|max:255',
            'booking_date' => 'required|date'
        ]);

        $booking = Booking::findOrFail($id);
        $booking->car_model = $request->car_model;
        $booking->booking_date = $request->booking_date;
        $booking->save();

        return redirect()->route('booking.search')->with('success', 'Бронирование успешно обновлено.');
    }

    // Отмена бронирования
    public function cancelBooking($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'cancelled';
        $booking->save();

        return redirect()->route('booking.search')->with('success', 'Бронирование успешно отменено.');
    }
}
