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
        Schema::create('day_tier', function (Blueprint $table) {

            $table->foreignId('day_id')->constrained()->onDelete('cascade');
            $table->foreignId('tier_id')->constrained()->onDelete('cascade');
            $table->primary(['day_id', 'tier_id']);

            $table->bigInteger('probability')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_tier');
    }
};
