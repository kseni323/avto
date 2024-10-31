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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Название автомобиля, например, "Hyundai Solaris"
            $table->text('description')->nullable(); // Описание автомобиля
            $table->decimal('price', 10, 2); // Цена аренды, например, 2933 ₽
            $table->string('image')->nullable(); // Путь к изображению автомобиля
            $table->enum('class', ['Эконом', 'Бизнес', 'Внедорожник']); // Класс автомобиля
            $table->enum('transmission', ['Автоматическая', 'Механическая']); // Тип трансмиссии
            $table->enum('drive_type', ['Передний', 'Задний', 'Полный']); // Тип привода
            $table->timestamps(); // Дата создания и обновления записи
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
