<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Effect;

class EffectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('items');

        foreach ($items as $item) {

            if (!empty($item['effects'])) {

                foreach ($item['effects'] as $effect) {

                    if (!empty($effect['effect_description'])) {

                        Effect::firstOrCreate([

                            'effect_description' => $effect['effect_description'],

                        ]);
                    }
                }
            }
        }
    }
}
