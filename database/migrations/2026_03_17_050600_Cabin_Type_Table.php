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
        schema::create('cabin_types', function(Blueprint $table){
            $table->id();
            $table->string('name');// e.g., "Ocean View Suite", "Balcony Suite", "Interior Room"
            $table->text('description')->nullable();
            $table->decimal('price_modifier', 10,2);
            $table->integer('max_occupancy');
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExist('cabin_types');
    }
};
