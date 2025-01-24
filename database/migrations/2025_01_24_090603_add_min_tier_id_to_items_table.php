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
        Schema::table('items', function (Blueprint $table) {

            $table->foreignId('min_tier_id')->nullable()->after('hero_id')->constrained('tiers')->onUpdate('cascade')->onDelete('set null');

            $table->dropColumn('item_size'); // Drop item_size if it existed.

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {

            $table->dropForeign(['min_tier_id']);
            $table->dropColumn('min_tier_id');

        });
    }
};
