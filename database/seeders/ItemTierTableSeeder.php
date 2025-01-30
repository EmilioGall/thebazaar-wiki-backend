<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTierTableSeeder extends Seeder
{

    private function getTierIds($minTierId)
    {
        switch ($minTierId) {
            case 1: // Bronze - Small
                return range(1, 4);
            case 2: // Silver - Small
                return range(2, 4);
            case 3: // Gold - Small
                return range(3, 4);
            case 4: // Diamond - Small
                return [4];
            case 6: // Bronze - Medium
                return range(6, 9);
            case 7: // Silver - Medium
                return range(7, 9);
            case 8: // Gold - Medium
                return range(8, 9);
            case 9: // Diamond - Medium
                return [9];
            case 11: // Bronze - Large
                return range(11, 14);
            case 12: // Silver - Large
                return range(12, 14);
            case 13: // Gold - Large
                return range(13, 14);
            case 14: // Diamond - Large
                return [14];
            default:
                return []; // Nessun tier associato
        }
    }
    
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

            $minTierId = $item['min_tier_id'];

            $tierIds = $this->getTierIds($minTierId);

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
