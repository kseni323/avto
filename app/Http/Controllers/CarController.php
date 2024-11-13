<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        // Получить уникальные значения для фильтров
        $classes = Car::select('class')->distinct()->pluck('class');
        $transmissions = Car::select('transmission')->distinct()->pluck('transmission');
        $driveTypes = Car::select('drive_type')->distinct()->pluck('drive_type');

        // Получить все автомобили для отображения
        $cars = Car::all();

        return view('cars', compact('classes', 'transmissions', 'driveTypes', 'cars'));
    }

    public function filter(Request $request)
    {
        $cars = Car::query()
            ->when($request->class, function ($query) use ($request) {
                return $query->where('class', $request->class);
            })
            ->when($request->transmission, function ($query) use ($request) {
                return $query->where('transmission', $request->transmission);
            })
            ->when($request->drive_type, function ($query) use ($request) {
                return $query->where('drive_type', $request->drive_type);
            })
            ->get();

        $html = view('partials.car_results', compact('cars'))->render();
        return response()->json(['html' => $html]);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('show', compact('car'));
    }
}