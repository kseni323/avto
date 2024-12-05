<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Booking;
class BookingController extends Controller
{

    

    public function storeBooking(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email',
            'pickup_date' => 'required|date|after_or_equal:today',
            'return_date' => 'required|date|after:pickup_date',
        ]);
    
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
    
        Booking::create($request->all());
    
        return redirect()->back()->with('success', 'Бронирование успешно создано!');
    }
}