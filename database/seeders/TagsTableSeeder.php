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
            ['tag_name' => 'Burn', 'tag_icon' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Charge', 'tag_icon' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Damage', 'tag_icon' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Freeze', 'tag_icon' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Haste', 'tag_icon' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Heal', 'tag_icon' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Poison', 'tag_icon' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Shield', 'tag_icon' => null, 'tag_type' => 'action'],
            ['tag_name' => 'Slow', 'tag_icon' => null, 'tag_type' => 'action'],

            // Effect Tags
            ['tag_name' => 'Cooldown', 'tag_icon' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Crit', 'tag_icon' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Experience', 'tag_icon' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Gold', 'tag_icon' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Health', 'tag_icon' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Income', 'tag_icon' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Lifesteal', 'tag_icon' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Passive', 'tag_icon' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Regeneration', 'tag_icon' => null, 'tag_type' => 'effect'],
            ['tag_name' => 'Value', 'tag_icon' => null, 'tag_type' => 'effect'],

            // Category Tags
            ['tag_name' => 'Ammo', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Apparel', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Aquatic', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Core', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Dinosaur', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Dragon', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Economy', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Food', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Friend', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Loot', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'NonWeapon', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Potion', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Property', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Ray', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Tech', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Tool', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Toy', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Unsellable', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Vehicle', 'tag_icon' => null, 'tag_type' => 'category'],
            ['tag_name' => 'Weapon', 'tag_icon' => null, 'tag_type' => 'category'],

            // Reference Tags
            ['tag_name' => 'Ammo', 'tag_icon' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Burn', 'tag_icon' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Crit', 'tag_icon' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Damage', 'tag_icon' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Freeze', 'tag_icon' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Haste', 'tag_icon' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Health', 'tag_icon' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'NonWeapon', 'tag_icon' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Poison', 'tag_icon' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Shield', 'tag_icon' => null, 'tag_type' => 'reference'],
            ['tag_name' => 'Slow', 'tag_icon' => null, 'tag_type' => 'reference'],
        ];

        foreach ($tags as $tag) {

            $newTag = new Tag();

            $newTag->tag_name = $tag['tag_name'];
            $newTag->tag_icon = $tag['tag_icon'] ?? null;
            $newTag->tag_type = $tag['tag_type'];

            $newTag->save();
        }
    }
}
