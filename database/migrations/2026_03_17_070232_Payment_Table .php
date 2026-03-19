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
            $table->foreignId('payment_method_id')->constrained('payment_methods')->onDelete('cascade');
            $table->decimal('amount', 10,2);
            $table->string('currency', 3)->default('PHP');
            $table->enum('payment_status',['successful','failed','pending', 'refunded'])->default('pending');
            $table->string('transaction_ref')->nullable();
            $table->timestamp('paid_at')->useCurrent()->nullable();
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
