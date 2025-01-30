<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTierTableSeeder extends Seeder
{
    
    public function run()
    {

        $items = config('items');

        foreach ($items as $item) {

            $itemId =
                DB::table('items')
                ->where('item_name', $item['item_name'])
                ->value('id');
            //

            if (!$itemId) {
                continue;
            }

            $tierIds = $item['tiers_id'];

            foreach ($tierIds as $tierId) {

                DB::table('item_tier')->insert([

                    'item_id' => $itemId,
                    'tier_id' => $tierId,
                    'created_at' => now(),
                    'updated_at' => now()

                ]);
            }
        }
    }

}