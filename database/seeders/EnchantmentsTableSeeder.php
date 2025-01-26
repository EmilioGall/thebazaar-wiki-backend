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

            ['enchantment_name' => 'Deadly', 'enchantment_name_it' => null, 'enchantment_name_fr' => null],
            ['enchantment_name' => 'Fiery', 'enchantment_name_it' => null, 'enchantment_name_fr' => null],
            ['enchantment_name' => 'Golden', 'enchantment_name_it' => null, 'enchantment_name_fr' => null],
            ['enchantment_name' => 'Heavy', 'enchantment_name_it' => null, 'enchantment_name_fr' => null],
            ['enchantment_name' => 'Icy', 'enchantment_name_it' => null, 'enchantment_name_fr' => null],
            ['enchantment_name' => 'Obsidian', 'enchantment_name_it' => null, 'enchantment_name_fr' => null],
            ['enchantment_name' => 'Restorative', 'enchantment_name_it' => null, 'enchantment_name_fr' => null],
            ['enchantment_name' => 'Shielded', 'enchantment_name_it' => null, 'enchantment_name_fr' => null],
            ['enchantment_name' => 'Shiny', 'enchantment_name_it' => null, 'enchantment_name_fr' => null],
            ['enchantment_name' => 'Toxic', 'enchantment_name_it' => null, 'enchantment_name_fr' => null],
            ['enchantment_name' => 'Turbo', 'enchantment_name_it' => null, 'enchantment_name_fr' => null],
            
        ];

        foreach ($enchantments as $enchantment) {

            $newEnchantment = new Enchantment();

            $newEnchantment->enchantment_name = $enchantment['enchantment_name'];
            $newEnchantment->enchantment_name_it = $enchantment['enchantment_name_it'];
            $newEnchantment->enchantment_name_fr = $enchantment['enchantment_name_fr'];

            $newEnchantment->save();
        }
    }
}
