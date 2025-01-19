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
        Schema::create('effects', function (Blueprint $table) {

            $table->id();

            $table->string('effect_name', 255)->unique()->nullable();
            $table->string('effect_name_it', 255)->unique()->nullable();
            $table->string('effect_name_fr', 255)->unique()->nullable();
            $table->text('effect_description');
            $table->text('effect_description_it')->nullable();
            $table->text('effect_description_fr')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('effects');
    }
};
