<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tags = [
            // Action Tags
            ['tag_name' => 'Burn', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Charge', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Damage', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Freeze', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Haste', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Heal', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Poison', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Shield', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Slow', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'action'],

            // Effect Tags
            ['tag_name' => 'Cooldown', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Crit', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Experience', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Gold', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Health', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Income', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Lifesteal', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Passive', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Regeneration', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Value', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'effect'],

            // Category Tags
            ['tag_name' => 'Ammo', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Aquatic', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Core', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Economy', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Food', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Friend', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],
            ['tag_name' => 'NonWeapon', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Potion', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Property', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Tool', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Unsellable', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Vehicle', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Weapon', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'category'],

            // Reference Tags
            ['tag_name' => 'Ammo', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Burn', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Crit', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Damage', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Freeze', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Haste', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Health', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'NonWeapon', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Poison', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Shield', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Slow', 'tag_name_it' => null, 'tag_name_fr' => null, 'tag_type' => 'reference'],
        ];

        foreach ($tags as $tag) {

            $newTag = new Tag();

            $newTag->tag_name = $tag['tag_name'];
            $newTag->tag_name_it = $tag['tag_name_it'];
            $newTag->tag_name_fr = $tag['tag_name_fr'];
            $newTag->tag_type = $tag['tag_type'];

            $newTag->save();
        }
    }
}
