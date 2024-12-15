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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id');
            $table->string('pickup_location');
            $table->string('return_location');
            $table->date('pickup_date');
            $table->date('return_date');
            $table->time('pickup_time')->nullable();
            $table->time('return_time')->nullable(); 
            $table->string('user_email');
            $table->string('status')->default('не оплачен');
            $table->timestamps();
            
        
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
