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
        Schema::create('tiers', function (Blueprint $table) {

            $table->id();

            $table->enum('tier_label', ['bronze', 'silver', 'gold', 'diamond', 'legendary']);
            $table->string('tier_frame')->unique()->nullable();
            $table->enum('tier_size', ['small', 'medium', 'large', 'rounded'])->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiers');
    }
};
