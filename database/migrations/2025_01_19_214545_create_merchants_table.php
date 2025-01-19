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
            $table->foreignId('tier_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();

            $table->string('merchant_name');
            $table->string('merchant_name_it')->nullable();
            $table->string('merchant_name_fr')->nullable();
            $table->bigInteger('reroll_cost')->nullable();
        
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
