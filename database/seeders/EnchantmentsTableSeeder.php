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

        $enchantments = [

            ['enchantment_name' => 'Deadly', 'tag_id' => 11],
            ['enchantment_name' => 'Fiery', 'tag_id' => 1],
            ['enchantment_name' => 'Golden', 'tag_id' => 19],
            ['enchantment_name' => 'Heavy', 'tag_id' => 9],
            ['enchantment_name' => 'Icy', 'tag_id' => 4],
            ['enchantment_name' => 'Obsidian', 'tag_id' => 16],
            ['enchantment_name' => 'Restorative', 'tag_id' => 6],
            ['enchantment_name' => 'Shielded', 'tag_id' => 8],
            ['enchantment_name' => 'Shiny', 'tag_id' => null],
            ['enchantment_name' => 'Toxic', 'tag_id' => 7],
            ['enchantment_name' => 'Turbo', 'tag_id' => 5],
            
        ];

        foreach ($enchantments as $enchantment) {

            $newEnchantment = new Enchantment();

            $newEnchantment->enchantment_name = $enchantment['enchantment_name'];
            $newEnchantment->tag_id = $enchantment['tag_id'] ?? null;

            $newEnchantment->save();
        }
    }
}
