<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'user_name',
        'user_email',
        'pickup_date',
        'return_date',
        'status',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}