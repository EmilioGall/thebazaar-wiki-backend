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
        Schema::create('item_tier', function (Blueprint $table) {

            $table->id();

            // Foreign key
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items')->cascadeOnDelete();

            // Foreign key
            $table->unsignedBigInteger('tier_id');
            $table->foreign('tier_id')->references('id')->on('tiers')->cascadeOnDelete();

            // Unique key
            $table->unique(['item_id', 'tier_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_tier');
    }
};
