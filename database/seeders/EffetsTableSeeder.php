<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Effect;

class EffetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $effects = config('effects');

        foreach ($effects as $effect) {

            Effect::firstOrCreate([

                'effect_description' => $effect['effect_description'],

            ]);
        }
    }
}
