<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_location'); // Место получения
            $table->string('return_location'); // Место возврата
            $table->date('pickup_date'); // Дата аренды
            $table->date('return_date'); // Дата возврата
            $table->string('car_type'); // Тип автомобиля
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
