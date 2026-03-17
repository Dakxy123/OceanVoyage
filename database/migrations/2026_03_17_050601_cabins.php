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
        schema::create('cabins', function(Blueprint $table){
            $table->id();
            $table->foreignId('ship_id')->constrained()->onDelete('cascade');
            $table->enum('cabin_type',['single','double','suite']);
            $table->enum('cabin_categories',['ocean view','balcony','interior']);
            $table->integer('floors');
            $table->decimal('prices', 10,2);
            $table->integer('max_occupancy');
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExist('cabins');
    }
};
