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
        Schema::create('choices', function (Blueprint $table) {

            $table->id();
            
            $table->string('choise_name', 255)->unique()->nullable();
            $table->string('choise_name_it', 255)->unique()->nullable();
            $table->string('choise_name_fr', 255)->unique()->nullable();
            $table->text('choise_description');
            $table->text('choise_description_it')->nullable();
            $table->text('choise_description_fr')->nullable();
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choices');
    }
};
