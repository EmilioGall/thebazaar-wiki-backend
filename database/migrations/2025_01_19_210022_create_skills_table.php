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
            $table->foreignId('hero_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('tier_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('effect_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

            $table->string('skill_name');
            $table->string('skill_name_it')->nullable();
            $table->string('skill_name_fr')->nullable();
            $table->text('skill_description');

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
