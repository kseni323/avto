<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Car extends Model
{
    protected $fillable = ['name', 'description', 'price','image', 'class', 'transmission','drive_type'];

    use HasFactory;
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}


