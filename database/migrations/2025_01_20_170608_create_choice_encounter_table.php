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
        Schema::create('choice_encounter', function (Blueprint $table) {

            $table->string('primary_value')->nullable();
            $table->string('secondary_value')->nullable();

            // Foreign key
            $table->unsignedBigInteger('choice_id');
            $table->foreign('choice_id')->references('id')->on('choices')->cascadeOnDelete();

            // Foreign key
            $table->unsignedBigInteger('encounter_id');
            $table->foreign('encounter_id')->references('id')->on('encounters')->cascadeOnDelete();

            // Primary key
            $table->primary(['choice_id', 'encounter_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choice_encounter');
    }
};
