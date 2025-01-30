<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Usa il DB facade
use App\Models\Enchantment;
use App\Models\Item;

class EnchantmentItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $items = config('items');

        foreach ($items as $item) {

            $existingItem = Item::where('item_name', $item['item_name'])->first();
        
            if (!$existingItem) {
                continue;
            }
        
            foreach ($item as $enchantment => $description) {

                if ($description === null) {
                    continue;
                }
        
                $existingEnchantment = Enchantment::where('enchantment_description', $description)->first();
        
                if ($existingEnchantment) {

                    $exists = DB::table('enchantment_item')->where([

                        'item_id' => $existingItem->id,
                        'enchantment_id' => $existingEnchantment->id,

                    ])->exists();
        
                    if (!$exists) {

                        DB::table('enchantment_item')->insert([
                            'item_id' => $existingItem->id,
                            'enchantment_id' => $existingEnchantment->id,
                        ]);

                    }
                }
            }
        }
    }
}