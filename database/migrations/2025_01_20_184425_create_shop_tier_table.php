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
        Schema::create('shop_tier', function (Blueprint $table) {

            $table->foreignId('shop_id')->constrained()->onDelete('cascade');
            $table->foreignId('tier_id')->constrained()->onDelete('cascade');
            $table->primary(['shop_id', 'tier_id']);

            $table->bigInteger('probability')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_tier');
    }
};
