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
        Schema::create('effect_enchantments', function (Blueprint $table) {

            $table->bigInteger('primary_value')->nullable();
            $table->bigInteger('secondary_value')->nullable();

            // Foreign key
            $table->unsignedBigInteger('effect_id');
            $table->foreign('effect_id')->references('id')->on('effects')->cascadeOnDelete();

            // Foreign key
            $table->unsignedBigInteger('enchantment_id');
            $table->foreign('enchantment_id')->references('id')->on('enchantments')->cascadeOnDelete();

            // Unique index
            $table->unique(['effect_id', 'enchantment_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('effect_enchantments');
    }
};
