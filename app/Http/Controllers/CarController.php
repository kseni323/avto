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
        $query = Car::query();
    
        // Фильтрация по классу, трансмиссии и типу привода
        if ($request->has('class') && $request->class) {
            $query->where('class', $request->class);
        }
    
        if ($request->has('transmission') && $request->transmission) {
            $query->where('transmission', $request->transmission);
        }
    
        if ($request->has('drive_type') && $request->drive_type) {
            $query->where('drive_type', $request->drive_type);
        }
    
        // Фильтрация по доступности на указанные даты
        if ($request->has('pickup_date') && $request->has('return_date')) {
            $pickupDate = $request->input('pickup_date');
            $returnDate = $request->input('return_date');
    
            $bookedCarIds = DB::table('bookings')
                ->where(function ($query) use ($pickupDate, $returnDate) {
                    $query->whereBetween('pickup_date', [$pickupDate, $returnDate])
                        ->orWhereBetween('return_date', [$pickupDate, $returnDate])
                        ->orWhere(function ($q) use ($pickupDate, $returnDate) {
                            $q->where('pickup_date', '<=', $pickupDate)
                              ->where('return_date', '>=', $returnDate);
                        });
                })
                ->pluck('car_id');
    
            $query->whereNotIn('id', $bookedCarIds);
        }
    
        $cars = $query->get();
    
        // Если машин нет
        if ($cars->isEmpty()) {
            return response()->json([
                'html' => '<div class="col-12 text-center mt-4"><p>По выбранным фильтрам или датам ничего не найдено.</p></div>'
            ]);
        }
    
        // Рендеринг результатов
        $html = view('car_results', compact('cars'))->render();
        return response()->json(['html' => $html]);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('show', compact('car'));
    }


public function filterAvailableCars(Request $request)
{
    $pickupDate = $request->input('pickup_date');
    $returnDate = $request->input('return_date');

    // Идентификаторы машин, которые заняты на указанные даты
    $bookedCarIds = DB::table('bookings')
        ->where(function ($query) use ($pickupDate, $returnDate) {
            $query->whereBetween('pickup_date', [$pickupDate, $returnDate])
                ->orWhereBetween('return_date', [$pickupDate, $returnDate])
                ->orWhere(function ($q) use ($pickupDate, $returnDate) {
                    $q->where('pickup_date', '<=', $pickupDate)
                      ->where('return_date', '>=', $returnDate);
                });
        })
        ->pluck('car_id');

    // Все доступные машины (те, которые не заняты)
    $availableCars = Car::whereNotIn('id', $bookedCarIds)->get();

    return response()->json($availableCars);
}

}