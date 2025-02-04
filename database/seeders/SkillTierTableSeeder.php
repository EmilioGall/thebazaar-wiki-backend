<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillTierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $skills = config('skills');

        foreach ($skills as $skill) {

            $skillId =
                DB::table('skills')
                ->where('skill_name', $skill['skill_name'])
                ->value('id');
            //

            if (!$skillId) {
                continue;
            }

            $tierIds = $skill['tiers_id'];

            foreach ($tierIds as $tierId) {

                DB::table('skill_tier')->insert([

                    'skill_id' => $skillId,
                    'tier_id' => $tierId,
                    'created_at' => now(),
                    'updated_at' => now()

                ]);
            }
        }
    }
}
