<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'title' => 'Выезд за пределы страны',
            'slug' => 'travel-abroad',
            'description' => 'Опция требует предварительного согласования.',
            'image' => 'images/services/travel-abroad.png',
        ]);

        Service::create([
            'title' => 'Возврат по адресу',
            'slug' => 'return-to-address',
            'description' => 'Возврат автомобиля в городе.',
            'image' => 'images/services/return-to-address.png',
        ]);

        Service::create([
            'title' => 'Детская люлька',
            'slug' => 'child-seat',
            'description' => 'Детская люлька для малышей.',
            'image' => 'images/services/child-seat.png',
        ]);

        Service::create([
            'title' => 'Детское кресло до 3 лет',
            'slug' => 'car-seat',
            'description' => 'Детское кресло для детей от полугода до 3 лет.',
            'image' => 'images/services/car-seat.png',
        ]);
    }
}