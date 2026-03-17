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
        schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 10,2);
            $table->string('payment_method')->default('cash_on_hand');
            $table->enum('payment_status',['successful','failed','pending'])->default('pending');
            $table->date('payment_date');
            $table->string('transactio0n_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExist('payments');
    }
};
