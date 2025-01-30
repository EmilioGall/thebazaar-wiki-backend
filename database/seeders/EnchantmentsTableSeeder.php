<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enchantment;
use App\Models\Tag; // Assicurati di importare il modello Tag

class EnchantmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $items = config('items');

        foreach ($items as $item) {

            if (isset($item['enchantments'])) {

                foreach ($item['enchantments'] as $enchantment => $description) {

                    if ($description === null) {

                        continue;
                    }

                    $existingEnchantment = Enchantment::where('enchantment_description', $description)->first();

                    if ($existingEnchantment) {

                        continue;
                    }

                    $tag = Tag::where('tag_name', $enchantment)->first();

                    $newEnchantment = new Enchantment();

                    $newEnchantment->enchantment_name = ucfirst($enchantment); // Capital first letter

                    $newEnchantment->enchantment_description = $description;

                    $newEnchantment->tag_id = $tag ? $tag->id : null;

                    $newEnchantment->save();
                }
            }
        }
    }
}