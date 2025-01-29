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
            $table->foreignId('tag_id')->nullable()->constrained('tags')->onDelete('set null')->onUpdate('cascade');

            $table->string('enchantment_name', 255)->unique();
            $table->string('enchantment_description', 255)->unique();

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
