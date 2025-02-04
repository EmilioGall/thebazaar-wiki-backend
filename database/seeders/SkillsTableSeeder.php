<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $skills = config('skills');

        foreach ($skills as $skill) {

            Skill::create([

                'min_tier_id' => $skill['min_tier_id'],

                'skill_name' => $skill['skill_name'],
                'skill_img' => $skill['skill_img'] ?? null,

            ]);
        }
    }
}
