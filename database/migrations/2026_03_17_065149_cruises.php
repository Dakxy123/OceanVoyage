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
            $table->string('name');
            $table->date('departure_date');
            $table->date('return_date');
            $table->time('departure_time');
            $table->time('return_time');
            $table->foreignId('destination_id')->constrained()->onDelete('cascade');
            $table->foreignId('ship_id')->constrained()->onDelete('cascade');
            $table->integer('duration_days');
            $table->text('iterenary')->nullable();
            $table->text('description')->nullable();
            $table->enum('status',['upcoming','ongoing','completed'])->default('upcoming');
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
