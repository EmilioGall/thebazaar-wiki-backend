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
        Schema::create('medias', function (Blueprint $table) {

            $table->id();
            $table->foreignId('encounter_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('hero_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('item_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('merchant_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('monster_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('skill_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('tag_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('tier_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();


            $table->enum('media_type', ['image', 'video', 'audio']);
            $table->string('media_url');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medias');
    }
};
