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
        Schema::create('items', function (Blueprint $table) {

            $table->id();
            $table->foreignId('hero_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('item_name', 255);
            $table->string('item_name_it', 255)->nullable();
            $table->string('item_name_fr', 255)->nullable();
            $table->enum('item_size', ['small', 'medium', 'large']);
            $table->boolean('item_state')->default(false)->nullable();
            $table->unsignedBigInteger('item_cooldown')->nullable();
            $table->text('item_description')->nullable();
            $table->text('item_description_it')->nullable();
            $table->text('item_description_fr')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
