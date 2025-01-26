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
        Schema::create('day_monster', function (Blueprint $table) {

            // Foreign key
            $table->unsignedBigInteger('day_id');
            $table->foreign('day_id')->references('id')->on('days')->cascadeOnDelete();

            // Foreign key
            $table->unsignedBigInteger('monster_id');
            $table->foreign('monster_id')->references('id')->on('monsters')->cascadeOnDelete();

            // Unique index
            $table->unique(['day_id', 'monster_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_monster');
    }
};
