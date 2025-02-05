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
        Schema::create('monsters', function (Blueprint $table) {

            $table->id();
            $table->foreignId('tier_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();

            $table->string('monster_name')->unique();
            $table->string('monster_slug')->unique();
            $table->string('monster_img')->unique()->nullable();
            $table->bigInteger('monster_level')->nullable();
            $table->bigInteger('monster_day')->nullable();
            $table->bigInteger('monster_health')->nullable();
            $table->bigInteger('monster_gold')->nullable();
            $table->bigInteger('monster_exp')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monsters');
    }
};
