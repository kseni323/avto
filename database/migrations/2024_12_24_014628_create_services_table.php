<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

        public function up()
        {
            Schema::create('services', function (Blueprint $table) {
                $table->id();
                $table->string('title');       // Название услуги
                $table->string('slug')->unique(); // Уникальный URL-идентификатор
                $table->text('description');  // Описание услуги
                $table->string('image')->nullable(); // Ссылка на изображение
                $table->timestamps();
            });
        }
    
        public function down()
        {
            Schema::dropIfExists('services');
        }
    };