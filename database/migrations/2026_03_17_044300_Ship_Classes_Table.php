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
       schema::create('ship_classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');// e.g., "Luxury Mega class", "Standard class", "Economic class", "Premium class"
            $table->enum('tier', ['budget', 'premium', 'standard', 'luxury'])->default('budget');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('ship_classes');
    }
};
