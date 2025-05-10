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
        Schema::create('food_tra_returns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('distribution_detail_id')->constrained()->onDelete('cascade');
            $table->date('return_date');
            $table->integer('returned_quantity');
            $table->integer('damaged_quantity')->default(0);
            $table->integer('missing_quantity')->default(0);
            $table->text('notes')->nullable();
            $table->foreignId('received_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_tra_returns');
    }
};
