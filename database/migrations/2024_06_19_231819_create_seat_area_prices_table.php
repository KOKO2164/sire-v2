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
        Schema::create('seat_area_prices', function (Blueprint $table) {
            $table->id();
            $table->double('price', 8, 2);
            $table->foreignId('show_id')->constrained('shows')->onDelete('cascade');
            $table->foreignId('seat_area_id')->constrained('seat_areas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_area_prices');
    }
};
