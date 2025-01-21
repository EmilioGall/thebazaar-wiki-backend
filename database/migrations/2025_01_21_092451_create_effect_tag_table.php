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
        Schema::create('effect_tag', function (Blueprint $table) {

            // set foreign key houses
            $table->unsignedBigInteger('effect_id');
            $table->foreign('effect_id')->references('id')->on('effects')->cascadeOnDelete();

            // set foreign key services
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags')->cascadeOnDelete();

            // set primary key
            $table->primary(['effect_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('effect_tag');
    }
};
