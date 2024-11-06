<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ReservationController;



Route::get('/', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/cars', function () {
    return view('cars');
});

Route::get('/show', function () {
    return view('show');
});


Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::post('/filter-cars', [CarController::class, 'filterCars']);

Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');

Route::post('/booking/redirect', [ReservationController::class, 'redirectWithReservationData'])->name('booking.redirect');

Route::post('/booking/store', [ReservationController::class, 'store'])->name('booking.store');


require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



