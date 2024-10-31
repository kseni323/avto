<?php

namespace App\Http\Controllers;

use App\Models\Car;
class CarController extends Controller
{
    public function index(Request $request)
    {
        // Получаем данные фильтра, если они заданы
        $class = $request->input('class');
        $transmission = $request->input('transmission');
        $driveType = $request->input('drive_type');

        // Строим запрос с учетом фильтров
        $cars = Car::query()
            ->when($class, function ($query) use ($class) {
                $query->where('class', $class);
            })
            ->when($transmission, function ($query) use ($transmission) {
                $query->where('transmission', $transmission);
            })
            ->when($driveType, function ($query) use ($driveType) {
                $query->where('drive_type', $driveType);
            })
            ->get();

        // Вернем вид с машинами
        return view('cars.index', compact('cars'));
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

}