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
       schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ship_class_id')->constrained('ship_classes')->onDelete('cascade');
            $table->string('name');
            $table->integer('passenger_capacity');
            $table->year('year_built');
            $table->enum('status', ['active', 'maintenance', 'decommissioned', 'retired'])->default('active');
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('ships');
    }
};
