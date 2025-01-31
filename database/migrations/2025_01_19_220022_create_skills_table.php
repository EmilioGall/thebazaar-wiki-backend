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
        Schema::create('skills', function (Blueprint $table) {

            $table->id();
            $table->foreignId('hero_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('min_tier_id')->nullable()->constrained('tiers')->onUpdate('cascade')->onDelete('set null');

            $table->string('skill_name')->unique();
            $table->string('skill_img')->unique()->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
