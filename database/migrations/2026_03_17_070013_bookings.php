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
         schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('cruise_id')->constrained()->onDelete('cascade');
            $table->foreignId('cabin_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('booking_date');
            $table->enum('status',['pending','confirmed','cancelled'])->default('pending');
            $table->decimal('total_cost', 10,2);
            $table->enum('payment_status',['paid','unpaid','refunded'])->default('unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExist('bookings');
    }
};
