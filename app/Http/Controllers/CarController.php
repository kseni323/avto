<?php


use App\Models\Car;
class CarController extends Controllers
{
public function showCars()
{
    $cars = Car::all(); // Получить все автомобили
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

}