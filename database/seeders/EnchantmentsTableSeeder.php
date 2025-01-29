<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enchantment;

class EnchantmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $itemEnchantments = config('enchantments');

        foreach ($itemEnchantments as $item) {

            foreach ($item as $enchantment => $description) {

                if ($description === null) {

                    continue;

                };

                $existingEnchantment = Enchantment::where('enchantment_description', $description)->first();

                if ($existingEnchantment) {

                    continue; 
                    
                }

                $newEnchantment = new Enchantment();
                
                $newEnchantment->enchantment_name = ucfirst($enchantment); // Capital name

                $newEnchantment->enchantment_description = $description;

                $tagIds = [
                    'deadly' => 11,
                    'fiery' => 1,
                    'golden' => 19,
                    'heavy' => 9,
                    'icy' => 4,
                    'obsidian' => 16,
                    'restorative' => 6,
                    'shielded' => 8,
                    'shiny' => null,
                    'toxic' => 7,
                    'turbo' => 5,
                ];

                $newEnchantment->tag_id = $tagIds[$enchantment] ?? null;

                $newEnchantment->save();
            }
        }
    }
}
