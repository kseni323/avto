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

    public function showCars()
    {
        $classes = Car::select('class')->distinct()->pluck('class')->filter();
        $transmissions = Car::select('transmission')->distinct()->pluck('transmission')->filter();
        $driveTypes = Car::select('drive_type')->distinct()->pluck('drive_type')->filter();
    
        return view('cars', compact('classes', 'transmissions', 'driveTypes'));
    }

public function show($id)
{
    $car = Car::findOrFail($id);
    $reservationData = session('reservationData', []);

    return view('show', compact('car', 'reservationData'));
}



}