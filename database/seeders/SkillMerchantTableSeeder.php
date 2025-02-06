<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Merchant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillMerchantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $merchants = config('merchants');

        foreach ($merchants as $merchantData) {

            if ($merchantData['merchant_type'] !== 'skills') {
                
                continue;
            }

            $merchant = Merchant::firstOrCreate(

                ['merchant_name' => $merchantData['merchant_name']],
                [
                    'merchant_image' => $merchantData['merchant_img'],
                    'merchant_description' => $merchantData['merchant_description'],
                    'merchant_day' => $merchantData['merchant_day'],
                    'merchant_reroll_cost' => $merchantData['merchant_reroll_cost'],
                    'merchant_type' => $merchantData['merchant_type'],
                ]

            );

            $skillsQuery = Skill::query();

            if (isset($merchantData['tags_id']) && !empty($merchantData['tags_id'])) {

                $skillsQuery->whereHas('tags', function ($query) use ($merchantData) {

                    $query->whereIn('tag_id', $merchantData['tags_id']);

                });
            }

            if (isset($merchantData['tiers_id']) && !empty($merchantData['tiers_id'])) {

                $skillsQuery->whereHas('tiers', function ($query) use ($merchantData) {

                    $query->whereIn('tier_id', $merchantData['tiers_id']);

                });
            }

            $skills = $skillsQuery->get();

            foreach ($skills as $skill) {

                DB::table('merchant_skill')->insert([

                    'merchant_id' => $merchant->id,
                    'skill_id' => $skill->id,

                ]);
            }
        }
    }
}
