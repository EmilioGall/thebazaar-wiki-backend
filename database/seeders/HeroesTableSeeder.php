<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $heroes = config('heroes');

        foreach ($heroes as $hero) {

            Hero::create([
                'hero_name' => $hero['hero_name'],
                'hero_description' => $hero['hero_description'] ?? null,
                'hero_description_it' => $hero['hero_description_it'] ?? null,
                'hero_description_fr' => $hero['hero_description_fr'] ?? null,
            ]);
            
        }
    }
}
