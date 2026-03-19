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
            $table->foreignId('ship_id')->constrained('ships')->onDelete('cascade');
            $table->foreignId('cabin_type_id')->constrained('cabin_types')->onDelete('cascade');
            $table->string('cabin_number');//"D-101", "B-202", "S-303"
            $table->integer('deck');//deck number where the cabin is located e.g., 1, 2, 3
            $table->boolean('is_available')->default(true);
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
