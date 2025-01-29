<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $items = config('items');

        foreach ($items as $item) {

            Item::create([

                'hero_id' => $item['hero_id'],
                'min_tier_id' => $item['min_tier_id'],

                'item_name' => $item['item_name'],
                'item_img' => $item['item_img'] ?? null,
                'item_state' => $item['item_state'],
                'item_cooldown' => $item['item_cooldown'] ?? null,
                'item_max_ammo' => $item['item_max_ammo'] ?? null,
                'item_multicast' => $item['item_multicast'] ?? null

            ]);
        }
    }
}
