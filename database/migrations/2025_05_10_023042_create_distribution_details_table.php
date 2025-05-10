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
        Schema::create('distribution_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('distribution_id')->constrained()->onDelete('cascade');
            $table->foreignId('school_id')->constrained()->onDelete('cascade');
            $table->integer('meal_count');
            $table->integer('food_tray_count');
            $table->enum('status', ['pending', 'in_transit', 'delivered'])->default('pending');
            $table->foreignId('driver_id')->nullable()->constrained('users')->onDelete('set null');
            $table->time('departure_time')->nullable();
            $table->time('arrival_time')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distribution_details');
    }
};
