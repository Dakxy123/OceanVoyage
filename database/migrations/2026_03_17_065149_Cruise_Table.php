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
        schema::create('cruises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ship_id')->constrained('ships')->onDelete('cascade');
            $table->foreignId('departure_port_id')->constrained('ports')->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('trip_type', ['round_trip', 'one_way', 'repositioning', 'loop'])->default('round_trip');
            $table->date('departure_date');
            $table->date('return_date');
            $table->unsignedInteger('duration_nights');
            $table->decimal('base_price', 10, 2);
            $table->enum('status', ['scheduled', 'boarding','sailing' , 'completed', 'cancelled'])->default('scheduled');
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExist('cruises');
    }
};
