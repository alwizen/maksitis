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
        Schema::create('kitchen_equipment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('equipment_type'); // regular, food_tray, dll
            $table->integer('total_quantity')->default(0);
            $table->integer('available_quantity')->default(0);
            $table->integer('in_use_quantity')->default(0);
            $table->integer('damaged_quantity')->default(0);
            $table->integer('min_quantity')->default(0);
            $table->string('status')->default('good'); // good, damaged, maintenance
            // $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kitchen_equipment');
    }
};
