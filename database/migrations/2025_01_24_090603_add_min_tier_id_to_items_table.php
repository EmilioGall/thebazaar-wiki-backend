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

            $table->foreignId('tier_id')->nullable()->after('hero_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->dropColumn('item_size'); // Uncomment to drop item_size if it existed.

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {

            $table->dropForeign(['tier_id']);
            $table->dropColumn('tier_id');

        });
    }
};
