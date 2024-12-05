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

    public function filter(Request $request) {
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

    public function showReservationForm()
{
    $cars = Car::pluck('name', 'id'); // Получаем список автомобилей (id и name)
    return view('reservation_form', compact('cars'));
}
}