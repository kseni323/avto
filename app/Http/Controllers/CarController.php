<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        // Получить уникальные значения для фильтров
        $classes = Car::select('class')->distinct()->pluck('class');
        $transmissions = Car::select('transmission')->distinct()->pluck('transmission');
        $driveTypes = Car::select('drive_type')->distinct()->pluck('drive_type');

        // Получить уникальные города
        $cities = Car::select('city')->distinct()->pluck('city');

        $city = $request->city ?? 'Все города';
        // Фильтрация по городу
        $query = Car::query();

        if ($request->has('city') && $request->city) {
            $query->where('city', $request->city);
        }

        $cars = $query->get(); // Получить автомобили для отображения (включая фильтр по городу)

        return view('cars', compact('classes', 'transmissions', 'driveTypes', 'cities', 'cars', 'city'));
    }

    public function filter(Request $request)
    {
        $query = Car::query();

        // Применение фильтров
        if ($request->has('class') && $request->class) {
            $query->where('class', $request->class);
        }

        if ($request->has('transmission') && $request->transmission) {
            $query->where('transmission', $request->transmission);
        }

        if ($request->has('drive_type') && $request->drive_type) {
            $query->where('drive_type', $request->drive_type);
        }

        // Фильтрация по городу
        if ($request->has('city') && $request->city) {
            $query->where('city', $request->city);
        }

        $cars = $query->get();

        if ($cars->isEmpty()) {
            return response()->json(['html' => '<div class="col-12 text-center mt-4"><p>По выбранным фильтрам ничего не найдено.</p></div>']);
        }

        // Рендеринг вьюшки с результатами
        $html = view('car_results', compact('cars'))->render();
        return response()->json(['html' => $html]);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('show', compact('car'));
    }
}