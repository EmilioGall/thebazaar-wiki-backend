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
        Schema::create('choice_media', function (Blueprint $table) {

            // set foreign key houses
            $table->unsignedBigInteger('choice_id');
            $table->foreign('choice_id')->references('id')->on('choices')->cascadeOnDelete();

            // set foreign key services
            $table->unsignedBigInteger('media_id');
            $table->foreign('media_id')->references('id')->on('medias')->cascadeOnDelete();

            // set primary key
            $table->primary(['choice_id', 'media_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choice_media');
    }
};
