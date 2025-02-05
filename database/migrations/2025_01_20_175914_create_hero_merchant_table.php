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
        Schema::create('hero_merchant', function (Blueprint $table) {

            // Foreign key
            $table->unsignedBigInteger('hero_id');
            $table->foreign('hero_id')->references('id')->on('heroes')->cascadeOnDelete();

            // Foreign key
            $table->unsignedBigInteger('merchant_id');
            $table->foreign('merchant_id')->references('id')->on('merchants')->cascadeOnDelete();

            // Primary key
            $table->primary(['hero_id', 'merchant_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_merchant');
    }
};
