<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'pickup_location',
        'return_location',
        'pickup_date',
        'return_date',
        'user_name',
        'user_email',
        'status',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}