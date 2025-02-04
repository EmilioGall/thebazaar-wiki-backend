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
        Schema::create('hero_skill', function (Blueprint $table) {

            // Foreign key
            $table->unsignedBigInteger('hero_id');
            $table->foreign('hero_id')->references('id')->on('heroes')->cascadeOnDelete();

            // Foreign key
            $table->unsignedBigInteger('skill_id');
            $table->foreign('skill_id')->references('id')->on('skills')->cascadeOnDelete();

            // Primary key
            $table->primary(['hero_id', 'skill_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_skill');
    }
};
