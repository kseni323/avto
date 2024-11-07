<?php

namespace App\Http\Controllers;

use App\Models\Car;
class CarController extends Controller
{
    public function index(Request $request)
    {
        // Получаем параметры фильтров из запроса
        $class = $request->input('class');
        $transmission = $request->input('transmission');
        $drive_type = $request->input('drive_type');
    
        // Строим запрос с учетом фильтров
        $query = Car::query();
    
        if ($class) {
            $query->where('class', $class);
        }
    
        if ($transmission) {
            $query->where('transmission', $transmission);
        }
    
        if ($drive_type) {
            $query->where('drive_type', $drive_type);
        }
    
        // Получаем результаты фильтрации
        $cars = $query->get();
    
        // Возвращаем вид с отфильтрованными машинами
        return view('cars.index', compact('cars'));
    }

public function show($id)
{
    $car = Car::findOrFail($id);
    $reservationData = session('reservationData', []);

    return view('show', compact('car', 'reservationData'));
}



}