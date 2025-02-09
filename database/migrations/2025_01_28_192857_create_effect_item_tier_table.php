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
        Schema::create('effect_item_tier', function (Blueprint $table) {

            $table->string('primary_value')->nullable();
            $table->string('secondary_value')->nullable();

            // Foreign key
            $table->unsignedBigInteger('effect_id');
            $table->foreign('effect_id')->references('id')->on('effects')->cascadeOnDelete();

            // Foreign key
            $table->unsignedBigInteger('item_tier_id');
            $table->foreign('item_tier_id')->references('id')->on('item_tier')->cascadeOnDelete();

            // Primary key
            $table->primary(['effect_id', 'item_tier_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('effect_item_tier');
    }
};
