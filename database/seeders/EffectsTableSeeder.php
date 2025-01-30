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

            if (!empty($item['effect_1'])) {

                Effect::firstOrCreate([

                    'effect_description' => $item['effect_1'],

                ]);
            }

            if (!empty($item['effect_2'])) {

                Effect::firstOrCreate([

                    'effect_description' => $item['effect_2'],

                ]);
            }
        }
    }
}
