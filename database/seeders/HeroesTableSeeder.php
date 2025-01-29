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

        $heroes = [

            [
                'hero_name' => 'Common',
                'hero_img' => null,
                'hero_description' => null,
            ],
            [
                'hero_name' => 'Dooley',
                'hero_img' => 'img/heroes/avata-dooley.webp',
                'hero_description' => 'Dooley - Description',
            ],
            [
                'hero_name' => 'Jules',
                'hero_img' => 'img/heroes/avata-jules.webp',
                'hero_description' => 'Jules - Description',
            ],
            [
                'hero_name' => 'Mak',
                'hero_img' => 'img/heroes/avata-mak.webp',
                'hero_description' => 'Mak - Description',
            ],
            [
                'hero_name' => 'Pygmalien',
                'hero_img' => 'img/heroes/avata-pygmalien.webp',
                'hero_description' => 'Pygmalien - Description',
            ],
            [
                'hero_name' => 'Stelle',
                'hero_img' => 'img/heroes/avata-stelle.webp',
                'hero_description' => 'Stelle - Description',
            ],
            [
                'hero_name' => 'Vanessa',
                'hero_img' => 'img/heroes/avata-vanessa.webp',
                'hero_description' => 'Vanessa - Description',
            ],

        ];

        foreach ($heroes as $hero) {

            Hero::create([
                'hero_name' => $hero['hero_name'],
                'hero_img' => $hero['hero_img'] ?? null,
                'hero_description' => $hero['hero_description'] ?? null,
            ]);
        }
    }
}
