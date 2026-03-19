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
         schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('nationality');//filipino, american, japanese
            $table->string('passport_number')->nullable();//some passengers may not have a passport, especially if the cruise is domestic
            $table->text('dietary_requirements')->nullable();//e.g., vegetarian, vegan, gluten-free
            $table->boolean('is_primary')->default(false);//indicates if this passenger is the account holder for the booking
            $table->boolean('is_checked_in')->default(false);//indicates if the passenger has completed the check-in process
            $table->boolean('is_smoker')->default(false);//indicates if the passenger is a smoker, which may affect cabin assignment
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExist('passengers');
    }
};
