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
            $table->string('name');
            $table->enum('type',['premium','standard','luxury']);//luxury,budget,adventure
            $table->integer('capacity');
            $table->integer('crew_members');
            $table->text('ameneties')->nullable();
            $table->text('facilities')->nullable();
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
