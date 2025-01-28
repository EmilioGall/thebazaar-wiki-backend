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
        Schema::create('enchantments', function (Blueprint $table) {

            $table->id();
            $table->foreignId('tag_id')->constrained()->onDelete('set null')->onUpdate('cascade')->nullable();

            $table->string('enchantment_name', 255)->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enchantments');
    }
};
