<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Добавляем `pickup_location` в массив $fillable
    protected $fillable = [
        'pickup_location',
        'return_location',
        'pickup_date',
        'return_date',
        'car_type',
        // Другие поля, если они есть
    ];
}