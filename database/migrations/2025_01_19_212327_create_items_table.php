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
        Schema::create('items', function (Blueprint $table) {

            $table->id();
            $table->foreignId('hero_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('min_tier_id')->nullable()->constrained('tiers')->onUpdate('cascade')->onDelete('set null');

            $table->string('item_name', 255)->unique();
            $table->string('item_img')->unique()->nullable();
            $table->boolean('item_state')->default(false);
            $table->unsignedBigInteger('item_cooldown')->nullable();
            $table->unsignedBigInteger('item_max_ammo')->nullable();
            $table->unsignedBigInteger('item_multicast')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
