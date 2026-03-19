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
        schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cruise_id')->constrained('cruises')->onDelete('cascade');
            $table->foreignId('port_id')->constrained('ports')->onDelete('cascade');
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->unsignedInteger('stop_order');//order of the destination in the cruise itinerary
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         schema::dropIfExist('destinations');
    }
};
