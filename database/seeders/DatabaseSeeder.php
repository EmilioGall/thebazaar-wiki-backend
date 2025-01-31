<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([

            HeroesTableSeeder::class,
            TiersTableSeeder::class,
            TagsTableSeeder::class,
            EnchantmentsTableSeeder::class,
            DaysTableSeeder::class,
            DayTierTableSeeder::class,
            ItemsTableSeeder::class,
            EffectsTableSeeder::class,
            EnchantmentItemTableSeeder::class,
            ItemTagTableSeeder::class,
            ItemTierTableSeeder::class,
            EffectItemTierTableSeeder::class,          

        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
