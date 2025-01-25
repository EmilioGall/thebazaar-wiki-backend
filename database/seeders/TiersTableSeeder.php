<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tier;

class TiersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tiers = [

            ['tier_label' => 'bronze', 'tier_size' => 'small'],
            ['tier_label' => 'silver', 'tier_size' => 'small'],
            ['tier_label' => 'gold', 'tier_size' => 'small'],
            ['tier_label' => 'diamond', 'tier_size' => 'small'],
            ['tier_label' => 'legendary', 'tier_size' => 'small'],
            ['tier_label' => 'bronze', 'tier_size' => 'medium'],
            ['tier_label' => 'silver', 'tier_size' => 'medium'],
            ['tier_label' => 'gold', 'tier_size' => 'medium'],
            ['tier_label' => 'diamond', 'tier_size' => 'medium'],
            ['tier_label' => 'legendary', 'tier_size' => 'medium'],
            ['tier_label' => 'bronze', 'tier_size' => 'large'],
            ['tier_label' => 'silver', 'tier_size' => 'large'],
            ['tier_label' => 'gold', 'tier_size' => 'large'],
            ['tier_label' => 'diamond', 'tier_size' => 'large'],
            ['tier_label' => 'legendary', 'tier_size' => 'large'],
            ['tier_label' => 'bronze', 'tier_size' => null],
            ['tier_label' => 'silver', 'tier_size' => null],
            ['tier_label' => 'gold', 'tier_size' => null],
            ['tier_label' => 'diamond', 'tier_size' => null],
            ['tier_label' => 'legendary', 'tier_size' => null],

        ];

        foreach ($tiers as $tier) {

            $newTier = new Tier();

            $newTier->tier_label = $tier['tier_label'];
            $newTier->tier_size = $tier['tier_size'];

            $newTier->save();
        }
    }
}
