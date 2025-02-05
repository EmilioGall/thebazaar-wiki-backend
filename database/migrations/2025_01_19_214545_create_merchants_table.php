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
        Schema::create('merchants', function (Blueprint $table) {

            $table->id();
            $table->foreignId('tier_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();

            $table->string('merchant_name')->unique();
            $table->string('merchant_slug')->unique();
            $table->string('merchant_img')->unique()->nullable();
            $table->bigInteger('merchant_day')->nullable();
            $table->enum('tag_type', ['items', 'skills'])->nullable();
            $table->bigInteger('reroll_cost')->nullable();
            $table->string('merchant_description')->unique()->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchants');
    }
};
