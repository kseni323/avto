<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\ServiceController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/filter', [CarController::class, 'filter'])->name('cars.filter');
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');

Route::post('/subscribe', [SubscribeController::class, 'subscribe']);

Route::get('/', [BookingController::class, 'showReservationForm'])->name('home');

Route::post('/booking/store', [BookingController::class, 'storeBooking'])->name('booking.store');

Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/my-booking', [BookingController::class, 'showSearchForm'])->name('booking.search');
Route::post('/find-booking', [BookingController::class, 'findBooking'])->name('booking.find');
Route::get('/edit-booking/{id}', [BookingController::class, 'editBooking'])->name('booking.edit');
Route::post('/cancel-booking/{id}', [BookingController::class, 'cancelBooking'])->name('booking.cancel');

Route::match(['put', 'post'], '/update-booking/{id}', [BookingController::class, 'updateBooking'])->name('booking.update');


require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



