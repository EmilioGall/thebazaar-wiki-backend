<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tier;
use App\Models\Shop;
use Illuminate\Support\Facades\DB;

class ShopTierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $probabilities = [
            1 => [100, 0, 0, 0],
            2 => [90, 10, 0, 0],
            3 => [80, 20, 0, 0],
            4 => [70, 30, 0, 0],
            5 => [55, 40, 5, 0],
            6 => [40, 50, 10, 0],
            7 => [30, 50, 20, 0],
            8 => [25, 45, 30, 0],
            9 => [10, 40, 40, 10],
            10 => [0, 30, 50, 20]
        ];

        // Inizialize tiers id
        $tiers = Tier::all()->keyBy('tier_label')->toArray();

        foreach ($probabilities as $day => $probs) {

            $shop = Shop::find($day);

            if ($shop) {

                $shopId = $shop->id;

                foreach ($probs as $tierIndex => $probability) {

                    if ($probability > 0) {

                        $tierKeys = ['bronze', 'silver', 'gold', 'diamond'];

                        $tierKey = $tierKeys[$tierIndex];

                        DB::table('shop_tier')->insert([

                            'shop_id' => $shopId,

                            'tier_id' => $tiers[$tierKey]['id'],

                            'probability' => $probability,
                            
                        ]);
                    }
                }
            }
        }
    }
}
