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
        Schema::table('cars', function (Blueprint $table) {
            $table->string('city')->default('Екатеринбург'); // Добавляем новый столбец с дефолтным значением
        });
    }
    
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('city'); // Удаляем столбец при откате миграции
        });
    }
};
