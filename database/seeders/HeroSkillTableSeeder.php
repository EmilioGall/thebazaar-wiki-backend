<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $skills = config('skills');

        foreach ($skills as $skill) {

            $existingskill = Skill::where('skill_name', $skill['skill_name'])->first();

            if ($existingskill && isset($skill['heroes_id'])) {

                foreach ($skill['heroes_id'] as $heroId) {

                    $existingHero = Hero::find($heroId);

                    if ($existingHero) {

                        $exists = DB::table('hero_skill')->where([

                            'skill_id' => $existingskill->id,
                            'hero_id' => $existingHero->id,

                        ])->exists();

                        if (!$exists) {

                            DB::table('hero_skill')->insert([

                                'skill_id' => $existingskill->id,
                                'hero_id' => $existingHero->id,

                            ]);
                        }
                    }
                }
            }
        }
    }
}
