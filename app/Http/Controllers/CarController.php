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
    return view('cars.show', compact('car'));
}

public function shows(Request $request, $car_model) {
    $pickupLocation = $request->query('pickup_location');
    $returnLocation = $request->query('return_location');
    $pickupDate = $request->query('pickup_date');
    $returnDate = $request->query('return_date');

    // Найти автомобиль по модели и отобразить страницу
    $car = Car::where('model', $car_model)->first();

    return view('car_details', compact('car', 'pickupLocation', 'returnLocation', 'pickupDate', 'returnDate'));
}
}