<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['name', 'description', 'price','image', 'class', 'transmission','drive_type'];
}

