<?php

namespace App\Http\Controllers;

use App\Models\Car;
class CarController extends Controller
{
    public function index()
    {
        // Получить все автомобили для начального отображения
        $cars = Car::all();
        return view('cars', compact('cars'));
    }

public function filter(Request $request)
{
    $cars = Car::query()
        ->when($request->class, fn($query) => $query->where('class', $request->class))
        ->when($request->transmission, fn($query) => $query->where('transmission', $request->transmission))
        ->when($request->drive_type, fn($query) => $query->where('drive_type', $request->drive_type))
        ->get();

    $html = view('partials.car_results', compact('cars'))->render();

    return response()->json(['html' => $html]);
}

public function show($id)
{
    $car = Car::findOrFail($id);
    $reservationData = session('reservationData', []);

    return view('show', compact('car', 'reservationData'));
}

}